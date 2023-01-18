<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Payment;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Mime\Encoder\Base64Encoder;

class PayPalController extends Controller
{
    //Getting Cookie data.
    public function shopping()
    {   
            $cookie = stripslashes(Cookie::get('shopping_cart'));
            $cookie_cart = json_decode($cookie, true);
            $i_id = array_column($cookie_cart, 'item_id');
            $cookie_quantity = array_column($cookie_cart, 'item_quantity');

            //Calculating total with item quantity and item price
            $total = 0;
            foreach($cookie_cart  as $cart)
            {
                $total+= ($cart["item_quantity"] * $cart["item_price"]);   
            }
            $arr = [$cookie, $cookie_cart ,$i_id, $cookie_quantity, $total];
            return $arr;
    }

    //Getting access token
    public function accessToken()
    {
        $access_token = "";
        $ch = curl_init();

        //Client Credentials from .env
        $client_id = env('Client_Id');
        $client_secret = env('Client_Secret');
        $base_url = env('Base_Url');

        //Setting up curl options
        curl_setopt($ch, CURLOPT_URL, $base_url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_USERPWD, $client_id.":".$client_secret);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
       
        //Getting response
        $result = curl_exec($ch);
    
        //Checking response and getting Access Token
        if(empty($result))
        {
            die('Error: No response');
        }
        else
        {
            $json = json_decode($result);
            $access_token = $json->access_token;
        }
        return $access_token;
    }
   

    
    //Creating the order
    public function payment()
    {

        //Getting access token
        $access_token = $this->accessToken();

        //Checking Cookie exists
        $cookie = Cookie::get('shopping_cart');
        if($cookie)
        {
            $arr = $this->shopping();
            $cookie_data = $arr[0];
            $cart_data = $arr[1];
            $item_id = $arr[2];
            $quantity = $arr[3];
            $total = $arr[4];
            
            //Setting up data for Payment
            $curl = curl_init();

            //Setting data for order creation
            $data = '
                {
                    "intent": "CAPTURE",
                    "payer": 
                        {
                            "payment_method": "paypal"
                        },
                        
                        

                    "purchase_units": 
                    [
                            {
                
                                "amount": 
                                {
                        
                                    "currency_code": "USD",
                            
                                    "value": "'.$total.'"
                        
                                }

                           
                    
                            }
                
                    ],
                    
                    "application_context": 
                    {
                        "return_url": "'.route('payment.success').'",
                        "cancel_url": "'.route('payment.success').'"
                    }
                
                                  
                }';
                
                //Creating order through cURL
                curl_setopt($curl, CURLOPT_URL, "https://api.sandbox.paypal.com/v2/checkout/orders");
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer ".$access_token));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                $response = curl_exec($curl); 
                $curl = curl_close($curl);
                $json2 = json_decode($response);
                $order_id = $json2->id;
                return redirect("https://www.sandbox.paypal.com/checkoutnow?token=".$order_id);
        
            
        }
            

    }

   

  
    //Getting Order ID and Payer ID through url query & Capturing Payment
    public function success(Request $request)
    {
        $access_token = $this->accessToken();

        $order_id = $request->query('token');
        $payer_id = $request->query('PayerID');

        $curl = curl_init();

         //Paypal Checkout
         curl_setopt($curl, CURLOPT_URL, "https://api.sandbox.paypal.com/v2/checkout/orders/".$order_id."/capture");
         curl_setopt($curl, CURLOPT_POST, true);
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer ".$access_token));
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
         $response = curl_exec($curl); 
         $curl = curl_close($curl);
         $json = json_decode($response, true);
        

         //Payment Data from response
         $payment_id = ($json["purchase_units"][0]["payments"]["captures"][0]["id"]);
         $payer_id = ($json["payer"]["payer_id"]);
         $user_id = rand(1,10);
         $payer_email = ($json["payer"]["email_address"]);
         $payment_status = ($json["status"]);
         $amount = ($json["purchase_units"][0]["payments"]["captures"][0]["amount"]["value"]);
         $currency = ($json["purchase_units"][0]["payments"]["captures"][0]["amount"]["currency_code"]);

        //Checking cookie exists
        if(Cookie::get('shopping_cart'))
        {
            $arr = $this->shopping();
            $cookie_data = $arr[0];
            $cart_data = $arr[1];
            $item_id = $arr[2];
            $quantity = $arr[3];
            $total = $arr[4];

        }

        //Concatinating shipping address from response
        $address_line_1 = $json["purchase_units"][0]["shipping"]["address"]["address_line_1"];
        $admin_area_2 = $json["purchase_units"][0]["shipping"]["address"]["admin_area_2"];
        $admin_area_1 = $json["purchase_units"][0]["shipping"]["address"]["admin_area_1"];

        //Getting order data from response
        $order_id = $json["id"];
        $product_id = $item_id;
        $name = $json["purchase_units"][0]["shipping"]["name"]["full_name"];
        $shipping_address = $address_line_1.", ".$admin_area_2.", ".$admin_area_1;
        $sub_total = $total;
        $payment_type = "Paypal";



        //opening a try catch block
        try
        {
            //Begin Transaction
            DB::beginTransaction();
            //Inserting data to payment table
            Payment::create([
                'payment_id' => $payment_id,
                'payer_id' => $payer_id,
                'user_id' => $user_id,
                'payer_email' => $payer_email,
                'payment_status' => $payment_status,
                'amount' => $amount,
                'currency' => $currency,
            ]);

            //Inserting data to order table
            Orders::create([
                'order_id' => $order_id,
                'user_id' => $user_id,
                'product_id' => $product_id[0],
                'name' => $name,
                'shipping_address' => $shipping_address,
                'quantity' => $quantity[0],
                'sub_total' => $sub_total,
                'payment_type' => $payment_type,
            ]);

            //Deducting quantity from products table after successfull payment
            $product_quantity = Products::query()->select(['quantity'])->where('id', '=', $item_id)->value('quantity');
            $final_quantity = (int)$product_quantity - (int)$quantity;
            Products::whereId($item_id)->update(['quantity' => $final_quantity]);

            //Resetting cookie after payment
            setcookie('shopping_cart', NULL, time()-3600);

            //Commiting the transaction
            DB::commit();

            
            // return redirect(route('cart'));
            dump($json);

        }
        catch(\Exception $e)
        {
            //If exception is thrown, rollback the changes
            DB::rollBack();

            //redirdcting to some route
            return redirect(route('store'));

        }

        

        

        
        
    }


}
