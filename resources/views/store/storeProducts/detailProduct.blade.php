
@extends('store.storeHome.master')

@section('content')

    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Product Details Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">product-details</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

                <div class="product_image_area">
                    <div class="container">
                        <div class="row s_product_inner">

                            <div class="col-lg-7 p-5 mt-lg-4">
                                <img src="{{'/images/'.$product_details->image_src }}" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-5">
                                <div class="s_product_text">
                                    <h3>{{$product_details->name}}</h3>
                                    <h2>${{$product_details->price}}</h2>
                                    <ul class="list">
                                        <li><span>Category:</span><a class="active text-uppercase">&nbsp;&nbsp; {{$product_details->category}}</a></li>
                                        <li><span>Availibility:</span><a class="active text-uppercase">&nbsp;&nbsp; {{$stock}}</a></li>
                                        <li>Total Stock: <a class="active text-uppercase">&nbsp;{{$product_details->quantity}}</a></li>
                                    </ul>
                                    <p>{{$product_details->l_description}}</p>
                                    <div class="product_count">
                                        <label for="qty">Quantity:</label>
                                        <input type="num" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                        
                                    </div>
                                    <div class="card_area d-flex align-items-center">
                                        <a class="primary-btn" href="#">Add to Cart</a>
                                        {{-- <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                                        <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a> --}}
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>

    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>Width</h5>
                                    </td>
                                    <td>
                                        <h5>128mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Height</h5>
                                    </td>
                                    <td>
                                        <h5>508mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Depth</h5>
                                    </td>
                                    <td>
                                        <h5>85mm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Weight</h5>
                                    </td>
                                    <td>
                                        <h5>52gm</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Quality checking</h5>
                                    </td>
                                    <td>
                                        <h5>yes</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Freshness Duration</h5>
                                    </td>
                                    <td>
                                        <h5>03days</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>When packeting</h5>
                                    </td>
                                    <td>
                                        <h5>Without touch of hand</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Each Box contains</h5>
                                    </td>
                                    <td>
                                        <h5>60pcs</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row">
                        <div class="col-lg-6">

                            {{-- <div class="review_box mb-4">
                                <h4>Add a Review</h4>
                                <p>Your Rating:</p>
                                <ul class="list">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <p>Outstanding</p>
                                
                            </div> --}}

                            <div class="review_list">
                                <div class="review_item">
                                    <div class="media">
                                        {{-- <div class="d-flex">
                                            <img src="/karma/img/product/review-1.png" alt="">
                                        </div> --}}
                                        {{-- <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div> --}}
                                    </div>
                                       <form action="{{route('comment', $product_details->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                        @csrf
                                            <div class="form-group">
                                                <div class="form-group">
                                                 
                                                <label class="my-3"><strong>Leave a comment.</strong></label>
                                                <textarea name="comment" type="text" class="form-control" id="editor"></textarea>
                                                </div>
                                                
                                                <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                                </div>
                                            </div>
                                            <button class="primary-btn border-0 rounded px-3" type="submit">Comment</button>
                                            
                                       </form>

                                        @forelse ($product_details->reviews as $comment)
                                           
                                                <div class="review_item py-4">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h4>
                                                                @if ($comment->user)
                                                                    {{$comment->user->username}}
                                                                @endif
                                                            </h4>
                                                            <h5>Commented on: {{$comment->created_at->format("d-m-y")}}</h5>

                                                            @if(Auth::check() && Auth::id() == $comment->user_id)
                                                                <i class="fa fa-edit fa-2x"></i>
                                                                &nbsp;
                                                                <i class="fa fa-trash-o fa-2x"></i>
                                                            @endif
                                                            {{-- <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i> --}}
                                                        </div>
                                                    </div>
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            @empty

                                            <h4>No comments yet</h4>

                                        @endforelse
                                </div>
                                
                               
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row total_rate mt-5">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        <h4>4.0</h4>
                                        <h6>(03 Reviews)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on 3 Reviews</h3>
                                        <ul class="list">
                                            <li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                            <li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection