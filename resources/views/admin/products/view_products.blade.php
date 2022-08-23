@extends('admin.home.master')

@section('content')



<div class="main-content">
<div class="row">

  <form class="form-inline mx-3">
    <div class="search-element">
      <input class="form-control border border-dark" id="search" type="search" placeholder="Enter Product name or ID" aria-label="Search" style="width:77vw">
      
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
          <div class="table-responsive">
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
                                <td style="overflow-x: scroll">{{$products->l_description}}</td>
                                <td class="align-center p-3"><img class="img-fluid" src="{{asset('images').'/'.$products->image_src}}"></td>
                                <td>{{$products->category}}</td>
                                <td>{{$products->quantity}}</td>
                                <td>{{$products->price}}</td>

                                <td>
                                  <form action="{{ route('delete_product', $products->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                  </form>
                                  
                                </td>
                                  <td>
                                    <form action="{{route('edit_product', $products->id)}}" method="GET">
                                      @csrf
                                      @method('get')
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
  </div>
</div>


<script src="{{asset('theme/assets/ajax/search.ajax.js')}}"></script>

{{-- <script>
  $('#deleteBtn').click(function()
  {
    var id = $(this).data("id")
    // var token = $(" ").attr("content");

    $.ajax(
    {
      url:'/delete_product/'+id,
      type: 'DELETE',
      data:
      {
        "id":id
        "_token":'{{csrf_token()}}',
      },
      success:function(data)
      {
            console.log(data);
      }
    })

  });
</script> --}}


@endsection