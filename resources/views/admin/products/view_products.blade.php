@extends('admin.home.master')

@section('content')



<div class="main-content">
<div class="row">

    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>All Products</h4>
          <br>
            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}  
              </div><br />
            @endif
          <div class="card-header-form">
            
          </div>
        </div>
        <div class="card-body px-4">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tbody>
                       
                          <tr class="border border-dark">
                      
                            <th>Product Name</th>
                            <th>Short Decription</th>
                            <th>Long Decription</th>
                            <th class="align-center">Image</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>

                        @foreach ($p_details as $products)

                            <tr class="border-bottom border-dark">
                            
                                <td>{{$products->name}}</td>
                                <td>{{$products->s_description}}</td>
                                <td>{{$products->l_description}}</td>
                                <td class="align-center"><img class="img-fluid" src="{{asset('images').'/'.$products->image_src}}"></td>
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
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection