@extends('backend.master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
      <h2>Product Images Create</h2>
        @csrf
       
        <div class="form-group">
          <label for="">Select Product</label>
            <select value="Select product" class="form-control"placeholder="Select product" name="product_id" id="a">
                @foreach ($products as $product)
                  <option class="form-control" value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
          <label for="">Select brand</label>
            <select value="Select Brand" class="form-control"placeholder="Select brand" name="brand_id" id="a">
                @foreach ($brands as $brand)
                  <option class="form-control" value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        <br>
        
          {{-- <label for="a">Select Category</label> --}}
          <label for="">Select category</label>
              <select value="Select Category" class="form-control"placeholder="Select category" name="category_id" id="a">
                    @foreach ($categories as $category)
                      <option class="form-control" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
              </select>
        </div>
        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select Product Image">
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>

@endsection