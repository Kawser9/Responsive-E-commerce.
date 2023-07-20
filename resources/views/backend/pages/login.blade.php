<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/login-form.css') }}" rel="stylesheet" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Latest minified Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!-- Latest minified Toastr JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
               <form class="form" action="{{route('login')}}" method="post">
                <h2>Admin login</h2>

                {{-- login faild msg --}}
                

                  {{-- validation error message --}}
                

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
           

               <script>
                  @if(session('logout'))
                  toastr.options = {
                     "closeButton": true,
                     "progressBar": true
                  };
                      toastr.success('{{ session('logout') }}');
                  @endif
                  @if(session('logoutfaild'))
                  toastr.options = {
                     "closeButton": true,
                     "progressBar": true
                  };
                      toastr.warning('{{ session('logoutfaild') }}');

                  @endif
              </script>