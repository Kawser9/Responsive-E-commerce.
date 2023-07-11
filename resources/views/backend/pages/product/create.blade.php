@extends('backend.master')
@section('content')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
      <h2>Product Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="name"class="form-control" id="name" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
          <input required type="number" name="price"class="form-control" id="price" placeholder="Enter Product Price">
        </div>
        <div class="form-group">
          <input required type="number" name="quantity"class="form-control" id="quantity" placeholder="Enter Product Quantity">
        </div>
        <div class="form-group">
          <textarea required type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter Product Description"></textarea>
        </div>
        <div class="form-group">
          {{-- <label for="a">Select Category</label> --}}
          <select value="Select Category" class="form-control" name="category_id" id="a">
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