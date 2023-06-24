@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
      <h4 class="page-header">Category Create</h4>          
      <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input required type="text" name="category_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter category name">
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Description</label>
          <textarea required type="description" name="descriptioon" class="form-control" id="exampleInputPassword1 "placeholder="Enter category description"></textarea>
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Image</label>
          <input required type="file" name="image" class="form-control" id="exampleInputPassword1 "placeholder="Select category image">
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection