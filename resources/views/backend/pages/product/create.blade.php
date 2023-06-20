@extends('backend.master')
@section('content')
<h4 class="page-header">Product Create</h4>                  
      <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" name="product_name"class="form-control" id="name" placeholder="Enter product name">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Price</label>
          <input type="number" name="product_price"class="form-control" id="price" placeholder="Enter product price">
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Description</label>
          <input type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter product description">
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Image</label>
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select product image">
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection