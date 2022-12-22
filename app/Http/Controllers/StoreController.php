<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Reviews;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{


    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $latest = Products::query()->select(['id','s_description','image_src','price'])->latest()->limit(8)->get();
        return view('store.storeHome.home',['latest' => $latest]);
    }

    public function checkOut()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('store.storeHome.billingInfo')->with('cart_data', $cart_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_details = Products::findOrFail($id);
        $quantity = $product_details->quantity;

        // $product = Products::where('id', $id)->with('users')->first();

        if($quantity == "0")
        {
            $stock = "Not in Stock"; 
        }
        else
        {
            $stock = "In Stock";
        }
        
        return view('store.storeProducts.detailProduct',compact('product_details', 'stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
