@extends('store.storeHome.master')

@section('content')
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="cart_area">
        <div class="container">
            @if(isset($cart_data))
                @if(Cookie::get('shopping_cart'))
                @php $total= 0 @endphp
                @php $btnCount = 0 @endphp
                @php $subTotal = 0 @endphp
                    <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($cart_data as $data)
                                    <tr>
                                        <td>
                                                <div class="">
                                                    <img class="img-fluid" src="{{'/images/'.$data['item_image'] }}" alt="" width="100vw"> 
                                                </div>
                                            
                                        </td>
                                        <td>
                                            <div class="">
                                                
                                                <div class="media-body">
                                                    <p>{{$data['item_name']}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 id="price{{$btnCount}}">$ {{$data['item_price']}}</h5>
                                        </td>
                                        <td>

                                            @php $btnCount++ @endphp
                                            <div class="product_count">
                                                <input type="hidden" class="product_id" value="{{ $data['item_id'] }}">
                                                <input type="text" name="qty" id="sst{{$btnCount}}" maxlength="12" value="{{$data['item_quantity']}}" title="Quantity:" class="input-text qty-input">
                                                
                                                <button 
                                                    onclick="var result = document.getElementById('sst{{$btnCount}}'); 
                                                    var sst = result.value; 
                                                    if( !isNaN( sst )) result.value++;
                                                    return true;"
                                                class="increase items-count" type="button">
                                                    <i class="lnr lnr-chevron-up"></i>
                                                </button>

                                                <button 
                                                    onclick="var result = document.getElementById('sst{{$btnCount}}'); 
                                                    var sst = result.value; 
                                                    if( !isNaN( sst )) result.value++;
                                                    return true;" 
                                                class="reduced items-count" type="button">
                                                    <i class="lnr lnr-chevron-down"></i>
                                                </button>
                                            
                                            </div>
                                        </td>
                                        
                                        {{-- @php $subTotal++ @endphp --}}
                                            <td class="totalAjax">
                                               
                                                <h5 class="totalH5{{$btnCount}}">$ {{ ($data['item_price'] * $data['item_quantity'] ) }}</h5>
                                            </td>

                                        <td>
                                            <button class="border-0"><a href="" class="primary-btn">Delete</a></button>
                                            
                                        </td>
                                        <script>
                                            var sst = $("#sst{{$btnCount}}").val()
                                            var th5 = $(".totalH5{{$btnCount}}").val()
                                            var price =  $("#price{{$btnCount}}").val()

                                            console.log(price);
                                        </script>
                                        @php $total = $total + ($data['item_price'] * $data['item_quantity']) @endphp
                                        
                                    </tr>
                                @endforeach

                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><h4>Grand Total: ${{$total}} </h4></td>
                                    <td></td>
                                    
                                 </tr>
                            </tbody>
                           
                        </table>
                       
                    </div>
                    <div class="row mt-5">

                        <div class="col-lg-3">
                            
                        </div>

                        <div class="col-lg-3 mx-auto mb-3">
                                <a class="primary-btn" href="/store">Back To Shopping</a>
                        </div>

                        <div class="col-lg-3 mx-auto">
                             <a class="primary-btn" href="#">Proceed to checkout</a>
                        </div>

                        <div class="col-lg-3">
                           
                       </div>
                    </div>
                    </div>
                @endif    
            @else
            <div class="row">
                <div class="col-md-12 mycard py-5 text-center">
                    <div>
                        <h2>Your cart is currently empty.</h2>
                        <br>
                        <a class="primary-btn" href="/store">Back To Shopping</a>
                    </div>
                </div>
            </div>
            @endif    
        </div>
    </section>


   
@endsection