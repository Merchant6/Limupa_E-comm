
@extends('store.storeHome.master')

@section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout_area section_gap">
            @if(session()->has('exception'))
                <div class="text-center p-3 mx-3 my-3" id="payment-error">
                    <h3 class="text-danger">{{ session()->get('exception') }}<h3>
                </div>
            @endif 

            
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form action="" class="row contact_form">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="fname" name="fname">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="lname" name="lname">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="tel" class="form-control" id="pnum" name="pnum">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="email">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="City"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="country" name="country">
                                <span class="placeholder" data-placeholder="Country"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address">
                                <span class="placeholder" data-placeholder="Street Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                               
                            </div>
                            <div class="col-md-12 form-group p_star">
                               
                            </div>  
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cnum" name="cnum">
                                <span class="placeholder" data-placeholder="CC Number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star text-center">
                                <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Credit Card Type
                                  </button>
                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="cursor: pointer;">
                                    <ul>
                                        <li class="dropdown-item" name="cc_type" value="visa">Visa</li>
                                        <li class="dropdown-item" name="cc_type" value="master">Master</li>
                                        <li class="dropdown-item" name="cc_type" value="americna_express">American Express</li>
                                     
                                    </ul>
                                    </div>
                            </div>
                        </form>    
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cc_month" name="cc_month">
                                <span class="placeholder" data-placeholder="CC Month"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cc_year" name="cc_year">
                                <span class="placeholder" data-placeholder="CC Year"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cvv" name="cvv">
                                <span class="placeholder" data-placeholder="CVV"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                               
                            </div>
                            <div class="col-md-12 form-group p_star">
                               
                            </div>  
                            

                            <form class="row contact_form" action="{{route('payment')}}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-6 form-group p_star">
                                    <button type="submit" class="primary-btn rounded" data-toggle="modal" data-target="#exampleModalCenter">Pay through Paypal</button>
                                
                                </div>
                            
                            </form>
                    </div>
                    <div class="col-lg-4">
                      
                                <div class="order_box">
                                    <h2>Your Order</h2>
                                        <ul class="list">
                                       
                                        @if(isset($cart_data))
                                            @if(Cookie::get('shopping_cart'))
                                                @php $total= 0 @endphp
                                                <li><a href="">Product <span>Total</span></a></li>
                                                @foreach ($cart_data as $data)
                                                    <li><a href="">{{$data['item_name']}}<span class="middle"> x {{$data['item_quantity']}}</span> <span class="last">${{$data['item_price']}}</span></a></li>
                                                    @php $total = $total + ($data['item_price'] * $data['item_quantity']) @endphp

                                                @endforeach
                                            @endif
                                            <ul class="list list_2">
                                                <li><a href="#">Subtotal <span>${{$total}}</span></a></li>
                                                <li><a href="#">Shipping <span>Free</span></a></li>
                                                <li><a href="#">Total <span id="total">{{$total}}</span></a></li>
                                            </ul>
                                            <div class="payment_item">
                                        
                                    
                                                <div id="paypal-button-container"></div>
        
                                            </div>
                                            @else 
                                                <p>You do not have any products in your cart.</p>
                                                <p><a href="/store">Go back to shopping.</a></p>
                                        @endif        
                                        </ul>
                                    
                                    
                                    
                                    
                                </div>
                            
                             
                    </div>
                </div>
            </div>
        </div>
        
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        
        <div class="modal-body p-5">
            <h3 class="text-center p-5">
                Processing, please wait...
            </h3>
        </div>
        
      </div>
    </div>
</div>
   

  <script>
    $(function() {
    setTimeout(
        function() 
        { $("#payment-error").fadeOut(1500); }, 
        5000)

    })
</script>
@endsection