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

    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif     
    
    
    <form class="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
      <h2>Product Create | <a href="{{ route('product.list') }}">List</a></h2>
      @csrf
      
      <div class="mb-3">
          <label for="name" class="form-label">Product Name</label>
          <input required type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name">
      </div>
      
      <div class="row">
          <div class="col-md-6">
              <div class="mb-3">
                  <label for="price" class="form-label">Product Price</label>
                  <input required type="number" name="price" class="form-control" id="price" placeholder="Enter Product Price">
              </div>
          </div>
          <div class="col-md-6">
              <div class="mb-3">
                  <label for="quantity" class="form-label">Product Quantity</label>
                  <input required type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter Product Quantity">
              </div>
          </div>
      </div>
      
      <div class="mb-3">
          <label for="description" class="form-label">Product Description</label>
          <textarea required name="descriptioon" class="form-control" id="description" placeholder="Enter Product Description"></textarea>
      </div>
      
      <div class="row">
          <div class="col-md-6">
              <div class="mb-3">
                  <label for="brand_id" class="form-label">Select Brand</label>
                  <select name="brand_id" class="form-select" aria-label="Select Brand">
                      <option selected>Select brand</option>
                      @foreach ($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
          <div class="col-md-6">
              <div class="mb-3">
                  <label for="category_id" class="form-label">Select Category</label>
                  <select name="category_id" class="form-select" aria-label="Select Category">
                      <option selected>Select category</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
              </div>
          </div>
      </div>
      
      <div class="mb-3">
          <label for="type" class="form-label">Select Type</label>
          <select name="type" class="form-select" aria-label="Select Type">
              <option selected>Select type</option>
              <option value="New">New</option>
              <option value="Upcoming">Upcoming</option>
              <option value="Best Sell">Best Sell</option>
          </select>
      </div>
      
      <div class="mb-3">
          <label for="image" class="form-label">Product Image</label>
          <input type="file" name="image" class="form-control" id="image">
      </div>
      
      <div style="text-align: center;">
        <button type="submit" class="button">Submit</button>
      </div>
      
  </form>
  

@endsection