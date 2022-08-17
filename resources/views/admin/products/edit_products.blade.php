@extends('admin.home.master')

@section('content')

<div class="main-content">

    <div class="row justify-content-center">
        <div class="card col-lg-12"> 
            <form action="{{route('update_product', $product_edit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Product Details</h4>
                    
                    </div>

                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="text-danger mx-4"><b>{{ $error }}</b></div>
                        @endforeach
                    @endif
                    <div class="card-body">
                    <div class="py-4">
                        
                       <div class="row my-5">
                        <div class="col-lg-4 border-bottom border-dark p-1">
                            Product Name
                        </div>
                        <div class="col-lg-4 text-muted border-bottom border-dark p-1">
                            {{ $product_edit->name }}
                        </div>
                        <div class="col-lg-4 border-bottom border-dark p-2">
                            <label for=""><b>Edit Product Name</b></label>
                            <input type="text" class="form-control border-dark" name="name" value="{{ $product_edit->name }}"/>

                        </div>
                       </div>
                        
                        
                       <div class="row my-5">
                        <div class="col-lg-4 border-bottom border-dark p-1">
                            Short Description
                        </div>
                        <div class="col-lg-4 text-muted border-bottom border-dark">
                            {{ $product_edit->s_description }}
                        </div>
                        <div class="col-lg-4 border-bottom border-dark p-1">
                            <label for=""><b>Edit Short Description</b></label>
                            <input type="text" class="form-control border-dark" name="s_description" value="{{ $product_edit->s_description}}"/>
                        </div>
                       </div>
                        
                        
                        <div class="row my-5">
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                Long Description
                            </div>
                            <div class="col-lg-4 text-muted border-bottom border-dark">
                                {{ $product_edit->l_description }}
                            </div>
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                <label for=""><b>Edit Long Description</b></label>
                                <input type="text" class="form-control border-dark" name="l_description" value="{{ $product_edit->l_description}}"/>
                            </div>
                        </div>
                        
                        
                       <div class="row my-5">
                        <div class="col-lg-4 border-bottom border-dark p-1">
                            Category
                        </div>
                        <div class="col-lg-4 text-muted border-bottom border-dark">
                            {{ $product_edit->category}}
                        </div>
                        <div class="col-lg-4 border-bottom border-dark p-1">
                            <label for=""><b>Edit Product Name</b></label>
                            <div class="input-group mx-4 my-2">
                                <input  name="category" value="clothing" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Clothing
                                </label>
                            </div>
                            <div class="input-group mx-4 my-2">
                                <input  name="category" value="mobile" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Mobiles
                                </label>
                            </div>
                            <div class="input-group mx-4 my-2">
                                <input  name="category" value="Computers" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Computers
                                </label>
                            </div>
                        </div>
                       </div>
                        
                        
                        <div class="row my-5">
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                Quantity
                            </div>
                            <div class="col-lg-4 text-muted border-bottom border-dark">
                                {{ $product_edit->quantity }}
                            </div>
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                <div class="form-group">
                                    <label>Edit Product Quantity</label><br>
                                    <span class="text-success">* Value should be greater than 0</span><br>
                                    <input name="quantity" value="{{ $product_edit->quantity}}" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                                    <div class="error">
                                     
                                    </div> 
                                </div>  
                            </div>
                        </div>
                        
                        
                        <div class="row my-5">
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                Price
                            </div>
                            <div class="col-lg-4 text-muted border-bottom border-dark">
                                {{ $product_edit->price}}
                            </div>
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                
                                <div class="form-group">
                                    <label>Edit Product Price</label><br>
                                    <span class="text-success">* Value should be greater than 0</span><br>
                                    <input name="price" value="{{ $product_edit->price}}" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                                    <div class="error">
                                     
                                    </div> 
                                </div>  
                            </div>
                        </div>
                        
                        
                           <div class="row my-5">
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                Image
                            </div>
                            <div class="col-lg-4 text-muted border-bottom border-dark">
                                <img class="img-fluid w-50" src="{{'/images/'.$product_edit->image_src }}">
                            </div>
                            <div class="col-lg-4 border-bottom border-dark p-1">
                                <label for=""><b>Upload another Image</b></label><br>
                                <span class="text-success">* Image format should be JPG, JPEG, or PNG</span><br>
                                <input type="file" class="form-control border-dark" name="image_src" value="{{ $product_edit->image_src}}"/>
                            </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div>
                </div>
            
            </form>
        </div>    

        </div>
    </div>




@endsection