@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('order.store')}}" method="post">
      <h2>Order Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="product"class="form-control" id="name" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
          <input required type="number" name="total"class="form-control" id="price" placeholder="Enter Total Price">
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>

@endsection