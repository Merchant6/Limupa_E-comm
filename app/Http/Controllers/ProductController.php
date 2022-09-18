<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{


    //Search Products
    public function search(Request $request)
    {
        $products = Products::where('name','like', '%'.$request->search.'%')
                    ->orWhere('category','like', '%'.$request->search.'%')->get();

        $output = "";
        foreach($products as $products)
        {
            $output.=
            '<tr class="border-bottom border-dark p-3">
                <td>'.$products->name.'</td>
                <td>'.$products->s_description.'</td>
                <td>'.$products->l_description.'</td>
                <td class="align-center p-5"><img class="img-fluid" src='.asset('images')."/".$products->image_src.'></td>
                <td>'.$products->category.'</td>
                <td>'.$products->quantity.'</td>
                <td>'.$products->price.'</td>
                <td>'.'
                    <form action='.route('delete_product', $products->id).' method="POST" id="deleteBtn">
                    
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger" type="submit">'.'Delete</button>
                    </form>
                    
                    '.'
                </td>

                <td>'.'
                    <form action='.route('editNew', $products->id).' method="GET">
                    <button class="btn btn-success" type="submit">Edit</button>
              </form>
                    
                    '.'
                </td>
               
             </tr>
            ';
        }

        return response($output);
    }



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

    
    public function productVerify(Request $request)
    {

            $val =  $request->validate
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
                    'required' => 'The :attribute field is required',
                    'mimes' => 'Image should be a JPG, JPEG, or PNG',
                    'integer' =>  'The :attribute field should be an integer.', 
                    's_descripton.required' => 'The short description is required',
                    'l_descripton.required' => 'The long description is required',
                    'image_src.required' => 'The image file is required.'
                ]
            );

        
        
           
                if (!$val)
                {
                    return response()->json(['errors'],421);
                }
                else
                {
                    return response()->json(['success' => 'Successful'],200);
                }
                
            
            
    }


    //Uploading Images 
    public function validImg(Request $request)
    {       
       
           
            if ($request->hasFile('image_src')) 
            {
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
                $validation =  $this->productVerify($request);
                
               
                
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
        
        
                
                $data = request()->except(['_token']);

                $validated =  $request->validate
                ([
                    'name' => 'string',
                    's_description' => 'string|max:150',
                    'l_description' => 'string|max:500',
                    'image_src' => 'mimes:jpg,png,jpeg',
                    'category' => 'string',
                    'quantity' => 'integer|not_in:0|regex:^[1-9][0-9]+^',
                    'price' => 'integer|not_in:0|regex:^[1-9][0-9]+^',
                ],
                [
                    'required' => 'The :attribute field is required',
                    'mimes' => 'Image should be a JPG, JPEG, or PNG',
                    'integer' =>  'The :attribute field should be an integer.', 
                ]);

                Products::whereId($id)->update($validated);

                
            
        

       
                return response()->json(['success' => 'Successful'],200);
                
        
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
        
        $destinationPath = base_path("/public/images").'/'.$products->image_src;
        if(File::exists($destinationPath))
        {

            File::delete($destinationPath); //for deleting only file try this
            $products->delete(); //for deleting record and file try both
    
        }

        // $products->delete();

        return redirect('view_products')->with('error', 'Product successfully deleted');
    }


    public function editNew($id)
    {
        $product_edit = Products::findOrFail($id);
        return view('admin.products.edit', compact('product_edit'));
    }
}
