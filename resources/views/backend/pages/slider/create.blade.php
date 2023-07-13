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
      <form class="form" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
      <h2>Slider Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="title"class="form-control" id="title" placeholder="Enter slider Title">
        </div>
        <div class="form-group">
          <input required type="text" name="description"class="form-control" id="description" placeholder="Enter slider Description">
        </div>
        
        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select slider Image">
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>

@endsection