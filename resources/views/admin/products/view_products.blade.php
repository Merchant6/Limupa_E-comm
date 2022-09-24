@extends('admin.home.master')

@section('content')



<div class="main-content">

  
      <!--<div class="row">

        <form class="form-inline mx-3">
          <div class="search-element">
            <input class="form-control border border-dark" id="search" type="search" placeholder="Enter product name or category" aria-label="Search" style="width:77vw">
            
          </div>
        </form>

          <div class="col-12">
            <div class="card">
              <div class="error">
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}  
                  </div><br/>
                @endif
            </div>

            <div class="error">
                @if(session()->get('error'))
                  <div class="alert alert-danger">
                    {{ session()->get('error') }}  
                  </div><br/>
                @endif
            </div>
              <div class="card-header">
                <h4>All Products</h4>
                
                <div class="card-header-form">
                  
                </div>
              </div>
              <div class="card-body px-4">
                <div class=".table-responsive">
                  <table class="table table-striped table-hover">
                      {{-- <tbody> --}}
                            
                                <tr class="border border-dark">
                            
                                  <th>Product Name</th>
                                  <th>Short Decription</th>
                                  <th >Long Decription</th>
                                  <th class="align-center">Image</th>
                                  <th>Category</th>
                                  <th>Quantity</th>
                                  <th>Price</th>
                              </tr>
                            <tbody id="data">
                              @foreach ($p_details as $products)

                                  <tr class="border-bottom border-dark">
                                  
                                      <td>{{$products->name}}</td>
                                      <td>{{$products->s_description}}</td>
                                      <td >{!! $products->l_description !!}</td>
                                      <td class="align-center p-3"><img class="img-fluid" src="{{asset('images').'/'.$products->image_src}}"></td>
                                      <td>{{$products->category}}</td>
                                      <td>{{$products->quantity}}</td>
                                      <td>{{$products->price}}</td>

                                    
                                  </tr>
                                  <tr >
                                    <td class="align-center">
                                      <form action="{{ route('delete_product', $products->id)}}" method="POST">
                                        
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                      </form>
                                      
                                    </td>
                                      <td>
                                        <form action="{{route('editNew', $products->id)}}" method="GET">
                                          
                                          
                                          <button class="btn btn-success" type="submit">Edit</button>
                                        </form>
                                      </td>
                                  </tr>
                                  
                              @endforeach
                                </tbody>
                                
                              <tbody id="contentSearch"></tbody>
                            
                      {{-- </tbody> --}}
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
      </div>-->

              
        <div class="row ">

          <form class="form-inline mx-3">
            <div class="search-element">
              <input class="form-control border border-dark" id="search" type="search" placeholder="Enter product name or category" aria-label="Search" style="width:77vw">
              
            </div>
          </form>

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>View Products</h4>
                
              </div>

              <div class="col-12 mx-2">
                <h6 class="text-success">To view product image & long description, click details on desired product.</h6>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6">
                    </div></div><div class="col-sm-12 col-md-6"><div id="table-1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                    <thead>
                      <tr role="row">
                        <th class="text-center sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                          #
                        : activate to sort column descending" style="width: 30.4972px;">
                          #
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1"  style="width: 166.52px;">Product Name</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 88.0966px;">Category</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 229.432px;">Short Description</th>
                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 101.051px;">Quantity</th>
                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 121.946px;">Price</th>
                        <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 83.6506px;">Actions</th></tr>
                    </thead>
                    <tbody id="data">
                      
                      @foreach ($p_details as $products)
                      
                        <tr role="row" class="odd">
                          <td>{{$products->id}}</td>
                          <td>{{$products->name}}</td>
                          <td>{{$products->category}}</td>
                          <td>{{$products->s_description}}</td>
                          <td>{{$products->quantity}}</td>
                          <td>{{$products->price}}</td>
                          <td>
                                <form action="{{ route('delete_product', $products->id)}}" method="POST">
                                  @method('delete')
                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <form action="{{route('editNew', $products->id)}}" method="GET">
                                  <button class="btn btn-success" type="submit">Details</button>
                                </form>
                          </td>
                        </tr> 

                      @endforeach
                     
                    </tbody>

                    <tbody id="contentSearch"></tbody>

                    

                  </table></div></div>

                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite" value="">
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                          <ul class="pagination">
                            {{-- <li class="paginate_button page-item previous disabled" id="table-1_previous">
                              <a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                            </li>
                            <li class="paginate_button page-item ">
                              <a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item next" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                            </li> --}}
                            
                              {!! $p_details->links() !!}
                          
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>








<script src="{{asset('theme/assets/ajax/search.ajax.js')}}"></script>




@endsection