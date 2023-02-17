
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


    <section class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3>User Details</h3>
                <h5>You can edit your details here:</h5>
                <form action="{{ route('update_user', Auth::user()->id) }}" class="row contact_form" method="POST">
                    @csrf
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                        
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="tel" class="form-control" id="pnum" name="pnum" value="{{Auth::user()->pnum}}">
                       
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="fname" name="fname" value="{{Auth::user()->fname}}">
                        
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="lname" name="lname" value="{{Auth::user()->lname}}">
                        
                    </div>
                    <button type="submit" class="primary-btn rounded" data-toggle="modal" data-target="#exampleModalCenter">Update</button>

                </form>    
                   


                    
            </div>
        </div>
    </section>

    <section class="container-fluid checkout_area mt-5 mb-5 p-5">
            {{-- @if(session()->has('exception'))
                <div class="text-center p-3 mx-3 my-3" id="payment-error">
                    <h3 class="text-danger">{{ session()->get('exception') }}<h3>
                </div>
            @endif  --}}

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="container">
                        <h1>Order Details</h1>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Order ID</th>
                                            <th>Product Quantity</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    
                                    @foreach($user_order as $user)
                                        @foreach($user->orders as $order)
                                            <tr>
                                                <td>{{ $user->fname . ' ' . $user->lname }}</td>
                                                <td>{{ $order->order_id }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->sub_total }}</td>
                                                
                                            </tr>
                                        @endforeach
                                    @endforeach
                
                                            
                                        
                                    
                                </table>
                            </div>  
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="container">
                        <h1>Payment Details</h1>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Payer ID</th>
                                            <th>Payment ID</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    @foreach($user_order as $user)
                                        @foreach($user->payments as $payment)
                                            <tr>
                                                <td>{{ $payment->payer_id}}</td>
                                                <td>{{ $payment->payment_id}}</td>
                                                <td>{{ $payment->amount}}</td>
                                                <td>{{ $payment->payment_status}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    @endforeach
                    
                                            
                                        
                                    
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            
        
    </section>
  
@endsection