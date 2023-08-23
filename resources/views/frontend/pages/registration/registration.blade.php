@extends('frontend.master')
@section('content')


<br><br><br><br>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
    @endforeach
    @endif

    <form class="form" action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
        <h2>Registration</h2>
        @csrf

        <div class="form-group">
            <input required type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter Name">
        </div>


        <div class="form-group">
        <input required type="email" name="email" class="form-control" id="exampleInputPassword1 "placeholder="Enter Email">
        </div>

        <div class="form-group">
            <input type="phone" name="phone" class="form-control" id="number "placeholder="Enter your phone number">
        </div>
        
        <div class="form-group">
            <input type="text" name="address" class="form-control" id="address"placeholder="Enter Your Address">
        </div>

        <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1 "placeholder="Enter New password">
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control" id="image "placeholder="Select image....">
        </div>
        <div class="form-group"><button type="submit" >Registration</button></div>
    </form>



    
@endsection