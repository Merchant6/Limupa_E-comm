
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

    <section class="checkout_area mt-5">
            {{-- @if(session()->has('exception'))
                <div class="text-center p-3 mx-3 my-3" id="payment-error">
                    <h3 class="text-danger">{{ session()->get('exception') }}<h3>
                </div>
            @endif  --}}

            <div class="container">
                <h1>Order Details</h1>
                <table class="table table-striped table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Full Name</th>
                            <th>Order ID</th>
                            <th>Product Quantity</th>
                            <th>Sub Total</th>
                            <th>Payment ID</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                       
                            @foreach ($user_order as $user)
                                        
                                    
                                    <td>{{$user->fname}} {{$user->lname}} </td>
                                    
                                    @foreach ($user->orders as $order)
                                    
                                        <td>{{$order->order_id}}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->sub_total}}</td>
                                    
                                    @endforeach
                                    
                                    @foreach ($user->payments as $payment)
                                    
                                        <td>{{$payment->payment_id}}</td>
                                        
                                        <td>{{$payment->payment_status}}</td>
                                      
                                    @endforeach
                                     
                            @endforeach
                        
                       
                </table>
            </div>
        
    </section>

   

  
@endsection