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

            {{-- @if(session()->has('msg'))
              <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif --}}

    <form class="form" action="{{Route('customer.login')}}" method="post" enctype="multipart/form-data">
        <h2>Login</h2>
        @csrf

        <div class="form-group">
        <input required type="email" name="email" class="form-control" id="exampleInputPassword1 "placeholder="Enter Your Email">
        </div>

        <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1 "placeholder="Enter Your password">
        </div>
        
        <div class="form-group"><button type="submit" >Login</button></div>
        <p>Don't have account? <a href="{{Route('registration')}}">Register</a></p>

    </form>
   



    <script>
        @if(Session::has('msg'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('msg') }}");
        @endif
      
        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif
      
        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif
      
        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>
    
@endsection