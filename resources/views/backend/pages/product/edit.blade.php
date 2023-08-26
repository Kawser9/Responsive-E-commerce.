@extends('backend.master')
@section('content')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              

    @php
    $encryptID =Crypt::encrypt($product->id);
@endphp

      <form class="form" action="{{route('product.update',$encryptID)}}" method="post" enctype="multipart/form-data">
      <h2>Product Update</h2>
        @csrf
@method('put')

        <label for="">Update Name</label>
          <div class="form-group">
            <input required type="text" placeholder="Name" name="name"class="form-control" id="name" value="{{$product->name}}">
          </div>

        <label for="">Update Price</label>
          <div class="form-group">
            <input required type="number" placeholder="Price" name="price"class="form-control" id="price" value="{{$product->price}}">
          </div>

        <label for="">Update Stock</label>
          <div class="form-group">
            <input required type="number" placeholder="Quantity" name="quantity"class="form-control" id="quantity" value="{{$product->quantity}}">
          </div>

        <label for="">Update Status</label>
          <div class="form-group">
            <input required type="text" placeholder="Status" name="status"class="form-control" id="status" value="{{$product->status}}">
          </div>

        <label for="">Update Description</label>
          <div class="form-group">
            <textarea required type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter Product Description">{{$product->description}}</textarea>
          </div>


        <label for="">Update brand</label>
          <div class="form-group">
            <select name="brand_id" class="form-select" aria-label="Default select example">
                @foreach ($brands as $brand)
                  <option @if ($product->brand_id==$brand->id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
          </div>
        
        <label for="">Update Category</label>
          <div class="form-group">
            <select name="category_id" class="form-select" aria-label="Default select example">
                @foreach ($categories as $category)
                <option  @if ($product->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
          </div>

        <label for="">Update Type</label>
          <div class="form-group">
            <select name="type" class="form-select" aria-label="Default select example">
                  <option @if ($product->type=='New') selected @endif value="New">New</option>
                  <option @if ($product->type=='Upcoming') selected @endif value="Upcoming">Upcoming</option>
                  <option @if ($product->type=='Best Sell') selected @endif value="Best Sell">Best Sell</option>
            </select>
          </div>

        <label for="">Update Image</label>
          <div class="form-group">
            <input type="file" name="image" class="form-control" id="exampleInputPassword1 "">
          </div>
          <div class="form-group"><button type="submit" >Update</button></div>
      </form>

@endsection