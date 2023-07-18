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
      <form class="form" action="{{Route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
      <h2>Update Slider</h2>
        @csrf
        @method('put')
        <div class="form-group">
          <input required type="text" name="title"class="form-control" id="title" value="{{$slider->title}}">
        </div>
        <div class="form-group">
          <input required type="text" name="description"class="form-control" id="description" value="{{$slider->description}}">
        </div>
        
        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Update slider Image">
        </div>
        <div class="form-group"><button type="submit" >Update</button></div>
      </form>

@endsection