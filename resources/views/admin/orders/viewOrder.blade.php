@extends('admin.home.master')

@section('content')



<div  id="pageCon">

  <div class="main-content" >

  

              
    <div class="row" >

      {{-- <form class="form-inline mx-3">
        <div class="search-element">
          <input class="form-control border border-dark" id="search" type="search" placeholder="Enter product name or category" aria-label="Search" style="width:77vw">
          
        </div>
      </form> --}}

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>View Orders</h4>
            
          </div>

          {{-- <div class="col-12 mx-2">
            <h6 class="text-success">To view product image & long description, click details on desired product.</h6>
          </div> --}}

          <div class="card-body" >
            <div class="table-responsive">
              <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6">
                </div></div><div class="col-sm-12 col-md-6"><div id="table-1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                <thead>
                  <tr role="row text-center">
                    <th class=" sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
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
                  
                  @foreach ($latest as $l)
                  
                    <tr role="row" class="">
                      <td>{{$l->id}}</td>
                      <td>{{$l->order_id}}</td>
                      <td>{{$l->user_id}}</td>
                      <td>{{$l->product_id}}</td>
                      <td>{{$l->quantity}}</td>
                      <td>{{$l->sub_total}}</td>
                      {{-- <td>
                            <form action="{{ route('delete_product', $l->id)}}" method="POST">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                            <form action="{{route('editNew', $l->id)}}" method="GET">
                              <button class="btn btn-success" type="submit">Details</button>
                            </form>
                      </td> --}}
                    </tr> 

                  @endforeach
                 
                </tbody>

                <tbody id="contentSearch"></tbody>

                

              </table></div></div>

              {{-- <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite" value="">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                      <ul class="pagination">
                       
                        
                          {!! $p_details->links() !!}
                      
                      </ul>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>








<script src="{{asset('theme/assets/ajax/search.ajax.js')}}"></script>
<script src="{{asset('theme/assets/ajax/pagination.ajax.js')}}"></script>





@endsection