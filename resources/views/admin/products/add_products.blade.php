@extends('admin.home.master')
@section('content')

    
      <div class="main-content">
        <div class="section-body">
          <div class="row ">

            <div class="col-lg-2"></div>

            <div class="col-8 col-md-8 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Add Product</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Short Description(approx 1 line)</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Long Description</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
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
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Clothing
                      </label>
                    </div>
                    <div class="input-group mx-4 my-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Mobiles
                      </label>
                    </div>
                    <div class="input-group mx-4 my-2">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Computers
                      </label>
                    </div>
                  </div>


                  <div class="form-group">
                    <label>Product Image</label>
                    <div class="input-group">
                    
                      <input type="file" class="form-control currency">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control invoice-input">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control invoice-input">
                  </div>
                 
                  
                </div>
              </div>
   
            </div>
            
            <div class="col-lg-2"></div>

          </div>
        </div>
      </div>
   



@endsection