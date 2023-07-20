@extends('backend.master')
@section('content')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
      <h2>Product Update</h2>
        @csrf
@method('put')
        <div class="form-group">
          <input required type="text" placeholder="Name" name="name"class="form-control" id="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
          <input required type="number" placeholder="Price" name="price"class="form-control" id="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
          <input required type="number" placeholder="Quantity" name="quantity"class="form-control" id="quantity" value="{{$product->quantity}}">
        </div>
        <div class="form-group">
          <input required type="text" placeholder="Status" name="status"class="form-control" id="status" value="{{$product->status}}">
        </div>
        <div class="form-group">
          <input type="description" placeholder="Description" name="descriptioon" class="form-control" id="exampleInputPassword1 "value="{{$product->description}}">
        </div>
        <div class="form-group">
          {{-- <label for="a">Select Category</label> --}}
          <label for="">Select Brand</label>
          <select value="Select Brand" class="form-control" name="brand_id" id="a">
            @foreach ($brands as $brand)
              <option class="form-control" value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
         </select>
         <br>
         <label for="">Select Category</label>
          <select value="Select Category" class="form-control" name="category_id" id="a">
                @foreach ($categories as $category)
                <option class="form-control" value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
          </select>
          
          
        </div>
        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "">
        </div>
        <div class="form-group"><button type="submit" >Update</button></div>
      </form>

@endsection