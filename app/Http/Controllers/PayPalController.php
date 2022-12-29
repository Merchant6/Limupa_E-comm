<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\Mime\Encoder\Base64Encoder;

class PayPalController extends Controller
{
    public function payment(Request $request)
    {
        
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
        

        //Checking Cookie exists
        $cookie = Cookie::get('shopping_cart');
        if($cookie)
        {
            //Getting and decoding the cookie data 
            $cookie_data = stripslashes($cookie);
            $cart_data = json_decode($cookie_data, true);
            
            //Calculating total with item quantity and item price
            $total = 0;
            foreach($cart_data as $cart)
            {
                $total+= ($cart["item_quantity"] * $cart["item_price"]);   
            }
            
            // dump($total);

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
                dump($json2);
                $order_id = $json2->id;
                // dump($order_id);
                return redirect("https://www.sandbox.paypal.com/checkoutnow?token=".$order_id);
        
            
        }
            

    }

    public function success()
    {
        return view('store.payment.success');
    }


}
