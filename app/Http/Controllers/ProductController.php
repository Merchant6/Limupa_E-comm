<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Throwable;

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
            '<tr role="row" class="odd">
                <td>'.$products->id.'</td>
                <td>'.$products->name.'</td>
                <td>'.$products->category.'</td>
                <td>'.$products->s_description.'</td>
                <td>'.$products->quantity.'</td>
                <td>'.$products->price.'</td>
                <td>'.'
                    <form action='.route('delete_product', $products->id).' method="POST" id="deleteBtn">
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger" type="submit">'.'Delete</button>
                    </form>

                    <form action='.route('editNew', $products->id).' method="GET">
                        <button class="btn btn-success" type="submit">Details</button>
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
        $p_details = Products::simplePaginate(20);
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

            
                $product_edit = Products::findOrFail($id);
                $requestData = $request->except(['_token']);
               
               
            
                $val =  Validator::make($requestData,
                    [
                    'name' => 'string|min:3|max:50',
                    's_description' => 'min:10|max:150',
                    'l_description' => 'min:50|max:1000',
                    'image_src' => 'mimes:jpg,png,jpeg',
                    'category' => 'string',
                    'quantity' => 'integer|not_in:0|regex:^[1-9][0-9]+^',
                    'price' => 'integer|not_in:0|regex:^[1-9][0-9]+^',
                    ]
                );

                
                
                if ($request->hasFile('image_src')) 
                    {
                        $ExistPath = base_path("/public/images/").$product_edit->image_src;
                        if(File::exists($ExistPath))
                        {
                            File::delete($ExistPath);
                        }
                        $filename = $request->file('image_src');
                        $filename->getClientOriginalName();
                        $filename = time().$filename->getClientOriginalName();
                        $destinationPath = base_path("/public/images");
                        $request->file('image_src')->move($destinationPath, $filename);
                        $requestData['image_src'] = $filename;
                        
                    }

                   
                    if($val->fails())
                    {
                        return response()->json([
                            'status' => 'error',
                            'error' => 'Something went wrong, please update the value again and make sure the field is not empty.'
                        ],421);    
                        
                    }
                    
                    else
                    {
                        Products::whereId($id)->update($requestData); 
                    
                        return response()->json([
                            'status' => 'success',
                            'data' => 'Product updated successfully.'
                        ],200);
                    }
                         
                                  
                                    
                   
                   
                    

                 
               



                             
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
