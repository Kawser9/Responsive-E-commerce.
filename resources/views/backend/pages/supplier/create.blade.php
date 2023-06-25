@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
    <form class="form" action="{{route('supplier.store')}}" method="post">
        <h2>Supplier Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="supplier_name"class="form-control" id="name" placeholder="Enter Supplier Name">
        </div>
        <div class="form-group">
          <input required type="tel" name="phone"class="form-control" id="price" placeholder="Enter Supplier Number">
        </div>
        <div class="form-group">
          <input required type="text" name="address" class="form-control" id="exampleInputPassword1 "placeholder="Enter Address">
        </div>
        <div class="form-group">
          <input required type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select Suppler Image">
        </div>
        <div class="form-group">
          <button type="submit" >Submit</button>
        </div>
      </form>

@endsection