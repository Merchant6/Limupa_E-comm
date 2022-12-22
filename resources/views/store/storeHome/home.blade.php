
@extends('store.storeHome.master')
@section('content')
  <!-- start banner Area -->
   <section class="banner-area">
      <div class="container">
         <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
               <div class="active-banner-slider">
                  <!-- single-slide -->
                  <!-- single-slide -->
                     <div class="" style="">
                        <div class="row single-slide">
                           <div class="col-lg-6">
                              <div class="banner-content">
                                 <h1>Nike New Updated<br>Collection!</h1>
                                 <p>They have a cushioned sole and a snug fit that feels like your second skin. And if you want to go faster, there's a new lightweight version of the Air Max 1 that'll get you up and down those stairs without breaking a sweat.
                                 </p>
                                 
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="">
                                 <img class="img-fluid" src="karma/img/banner/banner-img.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  
                  
                  
                  <div class="" style="">
                     
                  </div>
               </div>
            </div>
            
         </div>
      </div>
      </div>
      </div>
   </section>
 <!-- End banner Area -->
 <!-- start features Area -->
 <section class="features-area section_gap">
    <div class="container">
       <div class="row features-inner">
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
             <div class="single-features">
                <div class="f-icon">
                   <img src="karma/img/features/f-icon1.png" alt="">
                </div>
                <h6>Free Delivery</h6>
                <p>Free Shipping on all order</p>
             </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
             <div class="single-features">
                <div class="f-icon">
                   <img src="karma/img/features/f-icon2.png" alt="">
                </div>
                <h6>Return Policy</h6>
                <p>Free Shipping on all order</p>
             </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
             <div class="single-features">
                <div class="f-icon">
                   <img src="karma/img/features/f-icon3.png" alt="">
                </div>
                <h6>24/7 Support</h6>
                <p>Free Shipping on all order</p>
             </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
             <div class="single-features">
                <div class="f-icon">
                   <img src="karma/img/features/f-icon4.png" alt="">
                </div>
                <h6>Secure Payment</h6>
                <p>Free Shipping on all order</p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end features Area -->

 <!-- start product Area -->
 <section class="active-product-area section_gap ">
    <!-- single product slide -->
    <!-- single product slide -->
    <div class="">
       <div class="" style="">
         
          <div class="cloned" style="">
             <div class="single-product-slider">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-lg-6 text-center">
                         <div class="section-title">
                            <h1>Latest Products</h1>
                            <p>Nike shoes are made for running, but they're also perfect for walking around town or going out for dinner. They have a cushioned sole and a snug fit that feels like your second skin. And if you want to go faster, there's a new lightweight version of the Air Max 1 that'll get you up and down those stairs without breaking a sweat.
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <!-- single product -->

                      @foreach($latest as $l)
                        <div class="col-lg-3 col-md-6">
                           <div class="single-product">
                              <img class="img-fluid" src="{{'/images/'.$l->image_src }}" alt="">
                              <div class="product-details">
                                 <h6>{{$l->s_description}}</h6>
                                 <div class="price">
                                    <h6>${{$l->price}}</h6>
                                    {{-- <h6 class="l-through"></h6> --}}
                                 </div>
                                 <div class="prd-bottom">
                                    {{-- <a href="" class="social-info">
                                       <span class="ti-bag"></span>
                                       <p class="hover-text">add to bag</p>
                                    </a> --}}
                                    {{-- <a href="" class="social-info">
                                       <span class="lnr lnr-heart"></span>
                                       <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                       <span class="lnr lnr-sync"></span>
                                       <p class="hover-text">compare</p>
                                    </a> --}}
                                      
                                          <a href="{{route('show', $l->id)}}" type="submit" class="social-info">
                                             @method('GET')
                                          <span class="lnr lnr-move"></span>
                                          <p class="hover-text">view more</p>
                                       
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div> 
                     @endforeach

                      
                      
                   </div>
                </div>
             </div>
          </div>
         
       </div>
    </div>
    
    
 </section>
 <!-- end product Area -->
 <!-- Start brand Area -->
 <section class="brand-area section_gap">
    <div class="container">
       <div class="row">
          <a class="col single-img" href="#">
          <img class="img-fluid d-block mx-auto" src="karma/img/brand/1.png" alt="">
          </a>
          <a class="col single-img" href="#">
          <img class="img-fluid d-block mx-auto" src="karma/img/brand/2.png" alt="">
          </a>
          <a class="col single-img" href="#">
          <img class="img-fluid d-block mx-auto" src="karma/img/brand/3.png" alt="">
          </a>
          <a class="col single-img" href="#">
          <img class="img-fluid d-block mx-auto" src="karma/img/brand/4.png" alt="">
          </a>
          <a class="col single-img" href="#">
          <img class="img-fluid d-block mx-auto" src="karma/img/brand/5.png" alt="">
          </a>
       </div>
    </div>
 </section>
 <!-- End brand Area -->


@endsection