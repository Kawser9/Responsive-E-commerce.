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

<form class="form" action="{{ route('product.update', $encryptID) }}" method="post" enctype="multipart/form-data">
  <h2>Product Update</h2>
  @csrf
  @method('put')
  {{--  --}}

          <div class="mb-3">
            <label for="name" class="form-label">Update Name</label>
            <input required type="text" placeholder="Name" name="name" class="form-control" id="name" value="{{ $product->name }}">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="price" class="form-label">Update Price</label>
                  <input required type="number" placeholder="Price" name="price" class="form-control" id="price" value="{{ $product->price }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="quantity" class="form-label">Update Stock</label>
                  <input required type="number" placeholder="Quantity" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}">
                </div>
            </div>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Update Description</label>
          <textarea required name="descriptioon" class="form-control" id="description" placeholder="Enter Product Description">{{ $product->description }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="brand_id" class="form-label">Update Brand</label>
                  <select name="brand_id" class="form-select" aria-label="Update Brand">
                      @foreach ($brands as $brand)
                      <option @if ($product->brand_id==$brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endforeach
                  </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="category_id" class="form-label">Update Category</label>
                  <select name="category_id" class="form-select" aria-label="Update Category">
                      @foreach ($categories as $category)
                      <option @if ($product->category_id==$category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                </div>
            </div>
        </div>


        <div class="row">
          <div class="col-md-6">
              <div class="mb-3">
                <label for="type" class="form-label">Update Type</label>
                <select name="type" class="form-select" aria-label="Update Type">
                    <option @if ($product->type=='New') selected @endif value="New">New</option>
                    <option @if ($product->type=='Upcoming') selected @endif value="Upcoming">Upcoming</option>
                    <option @if ($product->type=='Best Sell') selected @endif value="Best Sell">Best Sell</option>
                </select>
              </div>
          </div>
          <div class="col-md-6">
              <div class="mb-3">
                  <label for="status" class="form-label">Update Status</label>
                  <select name="status" class="form-select" aria-label="Select Category">
                      <option selected>Select Status</option>
                      <option @if ($product->status=='active') selected @endif value="active">Active</option>
                      <option @if ($product->status=='deactive') selected @endif value="deactive">Deactive</option>
                  </select>
              </div>
          </div>
      </div>

        <div class="mb-3">
            
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Update Image</label>
          <input type="file" name="image" class="form-control" id="image">
        </div>
        <div style="text-align: center;">
          <button type="submit" class="button">Update</button>
        </div>
</form>


@endsection