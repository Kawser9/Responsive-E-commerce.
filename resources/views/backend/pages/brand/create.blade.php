@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif

    <form class="form" action="{{route('brand.store')}}" method="post">
      <h2>Brand Create</h2>
        @csrf
        <div class="form-group">
          <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter brand name">
        </div>
        <div class="form-group">
          <textarea required type="text" name="description" class="form-control" id="exampleInputPassword1 "placeholder="Enter brand description"></textarea>
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>

@endsection