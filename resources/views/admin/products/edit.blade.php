@extends('admin.home.master')
@section('content')

    
      <div class="main-content">
        <div class="section-body">
          <div class="row ">

            

            <div class="col-lg-2"></div>

            
              <div class="col-8 col-md-8 col-lg-8">
               
                
                
                <div class="card">
                  <div class="card-header">
                    <h4>Update Product</h4>
                  </div>
                  <div class="card-body">

                    
                    <input name="id" type="hidden" class="form-control" value="{{ $product_edit->id }}">
                    
                  <form class="mb-5" id="addForm1" enctype="multipart/form-data" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Product Name</label>
                        <input name="name" type="text" class="form-control" value="{{ $product_edit->name }}">
                            
                            <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                       </div>
                  </form> 

                    <form class="mb-5" id="addForm2" enctype="multipart/form-data" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Short Description</label>
                        <input name="s_description" type="text" class="form-control" value="{{ $product_edit->s_description }}">
                            
                            <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                      </div>
                  </form> 

                  <form class="mb-5" id="addForm3" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Long Description</label>
                      <textarea style="textarea: vertical;" name="l_description" type="text" class="form-control" id="editor">{{ $product_edit->l_description }}</textarea>
                          
                          <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                  </form> 

                  <form class="mb-5" id="addForm4" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Category</label>
                      <br>
                      <b><label class="text-success text-captilize">Current Category: {{ $product_edit->category }}</label></b>
                      <br>
                      <div class="input-group mx-4 my-2">
                        <input   name="category" value="clothing" class="form-check-input" type="radio" id="flexRadioDefault1" {{ $product_edit->category == 'clothing' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Clothing
                        </label>
                      </div>
                      <div class="input-group mx-4 my-2">
                        <input  name="category" value="mobiles" class="form-check-input" type="radio"  id="flexRadioDefault1" {{ $product_edit->category == 'mobiles' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Mobiles
                        </label>
                      </div>
                      <div class="input-group mx-4 my-2">
                        <input  name="category" value="computers" class="form-check-input" type="radio"  id="flexRadioDefault1" {{ $product_edit->category == 'computers' ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Computers
                        </label>
                      </div>
                    </div>  
                    <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                  </form>


                  <form class="my-5" id="addForm5" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label>Choose another Image</label><br>
                    <b><label class="text-success text-captilize">Current Image:  <br><img class="img-fluid w-50 rounded" src="{{'/images/'.$product_edit->image_src }}"></label></b><br>
                    <span class="text-success">* Image format should be JPG, JPEG, or PNG</span><br>
                    <div class="input-group">
                    
                      <input id="image_src" name="image_src" type="file" class="form-control currency" value="{{ $product_edit->quantity }}">
                      
                    </div>

                    <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                  </form> 

                  <form class="mb-5" id="addForm6" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label>Quantity</label><br>
                    <span class="text-success">* Value should be greater than 0</span><br>
                    <input name="quantity" type="number" class="form-control invoice-input" value="{{ $product_edit->quantity }}" min="1" oninput="validity.valid||(value='');">

                    <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                  </form> 

                  <form class="mb-5" id="addForm7" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label>Price</label><br>
                    <span class="text-success">* Value should be greater than 0</span><br>
                    <input name="price" type="number" class="form-control invoice-input" value="{{ $product_edit->price }}" min="1" oninput="validity.valid||(value='');">

                    <button type="submit" id="submit" class="btn btn-primary mt-2">Update</button>
                  </form> 


                  <div id="error">
                    <!-- Display errors here -->
                  </div>

                </div>

                
                  
                


              
     
              </div>
            
            
            <div class="col-lg-2"></div>

          </div>
        </div>
      </div>
   
      
      <script src="{{asset('theme/assets/ajax/update.ajax.js')}}"></script>
      <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor' );
      </script>
      

@endsection