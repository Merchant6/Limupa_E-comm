<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
       
            $validator = Validator::make($request->all(),[
                'comment' => 'required|string'
            ]);


            if($validator->fails())
            {
                return redirect()->back();
            }

            $product = Products::where('id', $request->id)->first();
            if($product)
            {
                Reviews::create
                ([
                    'user_id' =>  rand(1,22),
                    'product_id' => $product->id,
                    'comment'=> $request->comment
                ]);

                return redirect()->back();
            }
            else
            {
                return redirect()->back();
            }
       
    }
}
