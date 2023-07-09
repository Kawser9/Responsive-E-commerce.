@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
      <form class="form" action="{{Route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
        <h2>Update Category</h2>
        @csrf
        @method('put')

        <div class="form-group">
            <input required type="text" name="category_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$category->name}}">
        </div>
        <div class="form-group">
          <input required type="text" name="status"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$category->status}}">
        </div>

        <div class="form-group">
          <input required type="description" name="description" class="form-control" id="exampleInputPassword1 "value="{{$category->description}}">
        </div>


        <div class="form-group">
          <input type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select category image">
        </div>
        <div class="form-group"><button type="submit" >Update</button></div>
      </form>
     

@endsection