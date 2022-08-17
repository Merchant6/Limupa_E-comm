<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;

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

    
    public function productValidation(Request $request)
    {
        $request->validate
        (
            [
                'name' => 'required',
                's_description' => 'required',
                'l_description' => 'required',
                'image_src' => 'required|mimes:jpg,png,jpeg',
                'category' => 'required',
                'quantity' => 'required|integer|not_in:0|regex:^[1-9][0-9]+^',
                'price' => 'required|integer|not_in:0|regex:^[1-9][0-9]+^',
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
    }


    //Uploading Images 
    public function validImg(Request $request)
    {       
       
           
            if ($request->hasFile('image_src')) {
                $filename = $request->file('image_src');
                $filename->getClientOriginalName();
                $filename = time().$filename->getClientOriginalName();
                $destinationPath = base_path("/public/images");
                $request->file('image_src')->move($destinationPath, $filename);
                $data['image_src'] = $filename;
                    }
            return $data['image_src'];

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

    //Creating and Adding Products
    public function createProduct(Request $request)
    {
        //Product Validation
        $this->productValidation($request);
        
        $data = $request->all();
        $image_src = $this->validImg($request);
        
        Products::create
        ([
            'name' => $data['name'],
            's_description' => $data['s_description'],
            'l_description' => $data['l_description'],
            'category' => $data['category'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'image_src' => $image_src

        ]);

        return redirect()->to('view_products')->with(['success','Product added successfully']);
          
    }

    

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_edit = Products::findOrFail($id);
        return view('admin.products.edit_products', compact('product_edit'));
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
        //Product Validation
        $validatedData = $this->productValidation($request);
        
        $this->validImg($request);
    
        Products::whereId($id)->update($validatedData);

        return redirect('view_products')->with('success', 'Product details successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();

        return redirect('view_products')->with('error', 'Product successfully deleted');
    }
}
