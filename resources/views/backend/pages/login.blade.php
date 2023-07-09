<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/login-form.css') }}" rel="stylesheet" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
               <form class="form" action="{{route('login')}}" method="post">
                <h2>Admin login</h2>

                {{-- login faild msg --}}
               @if(session('msg'))
                  <div class="alert alert-success">
                     {{ session('msg') }}
                  </div>
               @endif

                  {{-- validation error message --}}
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                     <div>
                        <p class="alert alert-warning">{{$error}}</p>
                     </div>
                  @endforeach
                @endif

                {{-- csrl tocken --}}
                @csrf

                  <div class="form-group">
                     <input required type="email" name="email" class="form-control" placeholder="User Email">
                  </div>
                  <div class="form-group">
                     <input required type="password" name="password"class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group"><button type="submit" >Login</button></div>
                  
               </form>
           