@extends('admin.home.master')
@section('content')

    
      <div class="main-content">
        <div class="section-body">
          <div class="row ">

            

            <div class="col-lg-2"></div>

            
              <div class="col-8 col-md-8 col-lg-8">
               <form action="{{route('save_product')}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                  <div class="card-header">
                    <h4>Add Product</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input name="name" type="text" class="form-control">
                      
                      <div class="error">
                        @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      </div>

                    </div>
                    <div class="form-group">
                      <label>Short Description(approx 1 line)</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input name="s_description" type="text" class="form-control phone-number">
                      </div>
                      <div class="s_description">
                        @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('s_description') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Long Description</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input name="l_description" type="text" class="form-control pwstrength" data-indicator="pwindicator">
                        
                      </div>
                      <div class="error">
                        @if ($errors->has('l_description'))
                          <span class="text-danger">{{ $errors->first('l_description') }}</span>
                        @endif
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
                      <div class="error my-2">
                        @if ($errors->has('category'))
                          <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
  
  
                    <div class="form-group">
                      <label>Product Image</label><br>
                      <span class="text-success">* Image format should be JPG, JPEG, or PNG</span><br>
                      <div class="input-group">
                      
                        <input name="image_src" type="file" class="form-control currency">
                        
                      </div>
                      <div class="error">
                        @if ($errors->has('image_src'))
                          <span class="text-danger">{{ $errors->first('image_src') }}</span>
                        @endif
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label>Quantity</label><br>
                      <span class="text-success">* Value should be greater than 0</span><br>
                      <input name="quantity" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                      <div class="error">
                        @if ($errors->has('quantity'))
                          <span class="text-danger">{{ $errors->first('quantity') }}</span>
                        @endif
                      </div> 
                    </div>  
                    <div class="form-group">
                      <label>Price</label><br>
                      <span class="text-success">* Value should be greater than 0</span><br>
                      <input name="price" type="number" class="form-control invoice-input" min="1" oninput="validity.valid||(value='');">
                      <div class="error mb-2">
                        @if ($errors->has('price'))
                          <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

                
                  
                


               </form>
     
              </div>
            
            
            <div class="col-lg-2"></div>

          </div>
        </div>
      </div>
   



@endsection