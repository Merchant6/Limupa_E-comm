<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    //Getting Cart Data. 
    public function cart()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
       
        return view('store.storeProducts.addToCart')->with('cart_data', $cart_data);
        
    }


    //Adding Product to Cart
    public function addToCart(Request $request)
    {
        //Getting Product Id and Quantity from Product Detail Page
        $p_id = $request->input('product_id');
        $quantity = $request->input('quantity');


        //Checking if shopping_cart cookie already exists
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }
        
        // Checking if a added product is already added to cart
        $item_id_list = array_column($cart_data, 'item_id');
        $p_id_exists = $p_id;

         if(in_array($p_id_exists, $item_id_list))
         {
            foreach($cart_data as $keys => $values )
            {
                if($cart_data[$keys]["item_id"] == $p_id)
                {
                    $cart_data[$keys]["item_quantity"] = $quantity;
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>" ".$cart_data[$keys]['item_name']." Already Added To Cart."]);

                }
            }
         }


         //Initializing a new cookie if the cookie(shopping_cart) does not exist.
         else
         {
            $product = Products::find($p_id);
            $p_name = $product->name;
            $p_image = $product->image_src;
            $p_price = $product->price;

            if($product)
            {
                $item_array = array(
                    'item_id' => $p_id,
                    'item_name' => $p_name,
                    'item_image' => $p_image,
                    'item_quantity' => $quantity,
                    'item_price' => $p_price,
                );

                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['status'=>" ".$p_name." Added To Cart"]);
            }
         }
       
    }

    //Getting total no. of products from the cart to show on navigation bar.
    public function cartLoadAjax()
    {
        if (Cookie::get('shopping_cart')) 
        {
            $cookie_data  = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $total_cart = count($cart_data);

            echo json_encode(array('totalcart' => $total_cart)); die;
            return;
        }
        else
        {
            $total_cart = "0";
            echo json_encode(array('totalcart' => $total_cart)); die;
            return;
        }
    }

    public function updateCartData(Request $request)
    {
        //Getting Product Id and Quantity from Product Detail Page
        $p_id = $request->input('product_id');
        $quantity = $request->input('quantity');


        //Checking if shopping_cart cookie already exists
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        
        // Checking if a added product is already added to cart
        $item_id_list = array_column($cart_data, 'item_id');
        $p_id_exists = $p_id;

         if(in_array($p_id_exists, $item_id_list))
         {
            foreach($cart_data as $keys => $values )
            {
                if($cart_data[$keys]["item_id"] == $p_id)
                {
                    $cart_data[$keys]["item_quantity"] = $quantity;
                    $t_price = ($cart_data[$keys]["item_price"] * $quantity);
                    $gtprice = number_format($t_price);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json([
                        'status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated',
                        'gtprice' => ''.$gtprice.''
                    ]);

                }
            }
         }
    }

    public function delCartItem(Request $request)
    {
        $prod_id = $request->product_id;
        //Checking if shopping_cart cookie already exists
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            // Checking if a added product is already added to cart
            $item_id_list = array_column($cart_data, 'item_id');
            $p_id_exists = $prod_id;

         if(in_array($p_id_exists, $item_id_list))
         {
            foreach($cart_data as $keys => $values )
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    // return response()->json(['status'=>" ".$cart_data[$keys]['item_name']." Already Added To Cart."]);
                    return redirect(route('cart'));

                }
            }
         }
        }
        else
        {
            return "Nothing to list";
        }
    }
}
