<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewProducts()
    {
        $p_details = Products::all();
        return view('admin.products.view_products', compact('p_details'));
    }

    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.add_products');
    }

    public function createProduct(Request $request)
    {
        $request->validate
        (
            [
                'name' => 'required',
                's_description' => 'required',
                'l_description' => 'required',
                'image_src' => 'required|mimes:jpg,png,jpeg',
                'category' => 'required',
                'quantity' => 'required|integer|not_in:0|regex:^[1-9][0-9]+',
                'price' => 'required|integer|not_in:0|regex:^[1-9][0-9]+',
            ],

            [
                'name.required' => 'Product Name is required.',
                's_description.required' => 'Short Description is required.',
                'l_description.required' => 'Long Description is required.',
                'image_src.required' => 'Product Image is required.',
                'image_src.mime' => 'Image format should be JPG, JPEG, or PNG',
                'category.required' => 'Category is required.',
                'quantity.required' => 'Quantity is required, please enter a positive value.',
                'price.required' => 'Price is required, please enter a positive value.',
            ]
        );

       
        

        $data = $request->all();
        if($request->file('image_src')){
            $file= $request->file('image_src');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/images'), $filename);
            $data['image_src']= $filename;
        }

        //Showing image on View
        // <img src="{{ url('public/Image/'.$data->image) }}">

        Products::create([
            'name' => $data['name'],
            's_description' => $data['s_description'],
            'l_description' => $data['l_description'],
            'category' => $data['category'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'image_src' => $data['image_src']

          ]);
          

          
           

          
        
        //   return redirect()->to('view_products')->with(['success','Product added successfully']);
            return redirect()->back()->with(['success','Product added successfully']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
