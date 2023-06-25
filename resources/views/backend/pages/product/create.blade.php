@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('product.store')}}" method="post">
      <h2>Product Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="product_name"class="form-control" id="name" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
          <input required type="number" name="product_price"class="form-control" id="price" placeholder="Enter Product Price">
        </div>
        <div class="form-group">
          <textarea required type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter Product Description"></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select Product Image">
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>

@endsection