@extends('backend.master')
@section('content')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
             <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif              
      <form class="form" action="{{route('brand.update',$brand->id)}}" method="post" enctype="multipart/form-data">
      <h2>Brand Update</h2>
        @csrf
@method('put')
        <div class="form-group">
          <input required type="text" name="name"class="form-control" id="name" value="{{$brand->name}}">
        </div>
        
        <div class="form-group">
          <input type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "value="{{$brand->description}}">
        </div>
        <div class="form-group">
          <input required type="text" name="status"class="form-control" id="status" value="{{$brand->status}}">
        </div>
        <div class="form-group"><button type="submit" >Update</button></div>
      </form>

@endsection