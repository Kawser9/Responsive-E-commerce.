<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/login-form.css') }}" rel="stylesheet" />

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
               <form class="form" action="{{route('login')}}" method="post">
                <h2>Admin login</h2>
                @csrf
                  <div class="form-group">
                     <input type="email" name="email" class="form-control" placeholder="User Email">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password"class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group"><button type="submit" >Login</button></div>
                  
               </form>
           