@extends('backend.master')
@section('content')
            @if(session()->has('msg'))
            <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
                        <h1 class="page-header">Product List |  <a href="{{route('product.create')}}" class="c_button">Create</a>
                        </h1>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>SL</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->catname->name}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->status}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>
                                                    <img src="{{url('/uploads/products/'.$product->image)}}"style="width: 50px;" alt="">
                                            </td>
                                            <td style="inset-inline: ">
                                              <ul>
                                                  <a href="{{Route('product.show',$product->id)}}" class="btn btn-secondary">Show</a>
                                                  <a href="{{Route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                                  <a href="{{Route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
@endsection