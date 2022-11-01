<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{


    public function cart()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
       
        return view('store.storeProducts.addToCart')->with('cart_data', $cart_data);
    }

    public function addToCart(Request $request)
    {
        $p_id = $request->input('product_id');
        $quantity = $request->input('quantity');



        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {   
            $cart_data = array();
        }

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
}
