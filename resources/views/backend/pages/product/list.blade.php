@extends('backend.master')
@section('content')

<script>
    @if(session('msg'))
    toastr.options = {
       "closeButton": true,
       "progressBar": true
    };
        toastr.success('{{ session('msg') }}');
    @endif
</script>

        
            {{-- @if(session()->has('msg'))
            <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif --}}
                <div class="container mt-5">
                        <h2 class="page-header">Product List |  <a href="{{route('product.create')}}" class="c_button">Create</a>
                        </h2>
                            <div >
                                <table table class="table">
                                    <thead>
                                        <tr>
                                        <th>SL</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            {{-- <th>Description</th> --}}
                                            <th>Stock</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}  ৳</td>
                                            <td>{{$product->catname->name}}</td>
                                            <td>{{$product->brand_name->name}}</td>
                                            <td>{{$product->status}}</td>
                                            <td>{{$product->type}}</td>
                                            {{-- <td>{{$product->description}}</td> --}}
                                            <td>{{$product->quantity}}</td>
                                            <td>
                                                    <img src="{{url('/uploads/products/'.$product->image)}}"style="width: 50px;" alt="">
                                            </td>
                                            <td style="display: flex; align-items: center; justify-content: center;">
                                                @php
                                                  $encryptID = Crypt::encrypt($product->id);
                                                @endphp
                                                <a href="{{ Route('product.show', $encryptID) }}" class="btn btn-info btn-sm" style="margin-right: 5px;"><i class="fa fa-eye"></i></a>
                                                <a href="{{ Route('product.edit', $encryptID) }}" class="btn btn-success btn-sm" style="margin-right: 5px;"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{ Route('product.delete', $product->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products->links()}}
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
@endsection