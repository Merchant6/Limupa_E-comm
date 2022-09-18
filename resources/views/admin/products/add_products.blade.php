@extends('admin.home.master')
@section('content')

    
      <div class="main-content">
        <div class="section-body">
          <div class="row ">

            

            <div class="col-lg-2"></div>

            
              <div class="col-8 col-md-8 col-lg-8">
               <form id="addForm" enctype="multipart/form-data" method="POST">
                @csrf
                
                <div class="card">
                  <div class="card-header">
                    <h4>Add Product</h4>
                  </div>
                  <div class="card-body">

                    
                     
                    

                    <div class="form-group">
                      <label>Product Name</label>
                      <input name="name" type="text" class="form-control">
                      
                      

                    </div>
                    <div class="form-group">
                      <label>Short Description(approx 1 line)</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input name="s_description" type="text" class="form-control phone-number">
                      </div>
                      <div class="s_description">
                       
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label>Long Description</label>
                        <textarea name="l_description" type="text" class="form-control" id="editor"></textarea>
                            
                            
                      </div>
                      
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
  
                    <div class="form-group">
                      <label>Category</label>
                      <br>
                      <div class="input-group mx-4 my-2">
                        <input  name="category" value="clothing" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Clothing
                        </label>
                      </div>
                      <div class="input-group mx-4 my-2">
                        <input  name="category" value="mobiles" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Mobiles
                        </label>
                      </div>
                      <div class="input-group mx-4 my-2">
                        <input name="category" value="computers" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Computers
                        </label>
                      </div>
                      
  
  
                    <div class="form-group">
                      <label>Product Image</label><br>
                      <span class="text-success">* Image format should be JPG, JPEG, or PNG</span><br>
                      <div class="input-group">
                      
                        <input id="image_src" name="image_src" type="file" class="form-control currency">
                        
                      </div>
                      
                    </div>
                   
                    <div class="form-group">
                      <label>Quantity</label><br>
                      <span class="text-success">* Value should be greater than 0</span><br>
                      <input name="quantity" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                      
                    </div>  
                    <div class="form-group">
                      <label>Price</label><br>
                      <span class="text-success">* Value should be greater than 0</span><br>
                      <input name="price" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                      
                   
                    <button type="submit" id="submit" class="btn btn-primary mt-2">Submit</button>
                  </div>

                  <div id="error">
                    <!-- Display errors here -->
                  </div>

                </div>

                
                  
                


               </form>
     
              </div>
            
            
            <div class="col-lg-2"></div>

          </div>
        </div>
      </div>
   
      <script src="{{asset('theme/assets/ajax/add_product.ajax.js')}}"></script>

      <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor' );
    </script>

@endsection