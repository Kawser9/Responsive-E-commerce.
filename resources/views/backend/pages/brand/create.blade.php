@extends('backend.master')
@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif

      <h1 class="page-header">Brand Create</h1>          
      <form action="{{route('brand.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter brand name">
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Description</label>
          <textarea required type="text" name="description" class="form-control" id="exampleInputPassword1 "placeholder="Enter brand description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection