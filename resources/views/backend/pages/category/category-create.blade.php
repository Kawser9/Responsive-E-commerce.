@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
      <form class="form" action="{{route('category.store')}}" method="post">
        <h2>Category Create</h2>
        @csrf

        <div class="form-group">
            <input required type="text" name="category_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter category name">
        </div>


        <div class="form-group">
          <textarea required type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter category description"></textarea>
        </div>

        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select category image">
        </div>
        <div class="form-group"><button type="submit" >Submit</button></div>
      </form>
     

@endsection