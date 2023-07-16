@extends('backend.master')
@section('content')
            @if(session()->has('msg'))
            <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
                        <h1 class="page-header">Product List |  <a href="{{route('product.create')}}" class="c_button">Create</a>
                        </h1>
                            <div >
                                <table table class="table">
                                    <thead>
                                        <tr>
                                        <th>SL</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->catname->name}}</td>
                                            <td>{{$product->brand_name->name}}</td>
                                            <td>{{$product->status}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>
                                                    <img src="{{url('/uploads/products/'.$product->image)}}"style="width: 50px;" alt="">
                                            </td>
                                            <td style="inset-inline: ">
                                              <ul>
                                                  <a href="{{Route('product.show',$product->id)}}" class="btn btn-primary"><i class="fa fa-eye" ></i></a>
                                                  <a href="{{Route('product.edit',$product->id)}}" class="btn btn-success"><i class="fa fa-pencil-square"></i></a>
                                                  <a href="{{Route('product.delete',$product->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                              </ul>
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
@endsection