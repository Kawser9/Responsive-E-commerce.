<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   {{-- start toastr --}}
   <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
   <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   {!! Toastr::message() !!}
   {{-- end toastr --}}
   {{-- toastr --}}
   <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
   {{-- end toastr --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
   <style>
     .rounded-t-5 {
       border-top-left-radius: 0.5rem;
       border-top-right-radius: 0.5rem;
     }
 
     @media (min-width: 992px) {
       .rounded-tr-lg-0 {
         border-top-right-radius: 0;
       }
 
       .rounded-bl-lg-5 {
         border-bottom-left-radius: 0.5rem;
       }
     }
   </style>
   <div class="card mb-3">
     <div class="row g-0 d-flex align-items-center">
       <div class="col-lg-4 d-none d-lg-flex">
         <img src="https://previews.123rf.com/images/ylivdesign/ylivdesign2004/ylivdesign200402733/144989837-global-admin-icon-outline-global-admin-vector-icon-for-web-design-isolated-on-white-background.jpg" alt="Trendy Pants and Shoes"
           class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
       </div>
       <div class="col-lg-8">
         <div class="card-body py-5 px-md-5">
 
            <form class="form" action="{{route('login')}}" method="post">
               @csrf
             <!-- Email input -->
             <div class="form-outline mb-4">
               <input type="email" name="email" id="form2Example1" placeholder="Email address" class="form-control" />
              
             </div>
 
             <!-- Password input -->
             <div class="form-outline mb-4">
               <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
              
             </div>
             <div class="form-group"><button class="btn btn-danger btn-block mb-4" type="submit" >Login</button></div>
             <!-- Submit button -->
             {{-- <button type="button" class="btn btn-danger btn-block mb-4">Sign in</button> --}}
 
           </form>
 
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Section: Design Block -->

</body>
</html>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <link href="{{ URL::asset('css/login-form.css') }}" rel="stylesheet" /> --}}

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


               {{-- <form class="form" action="{{route('login')}}" method="post">
                <h2>Admin login</h2>


                @csrf

                  <div class="form-group">
                     <input required type="email" name="email" class="form-control" placeholder="User Email">
                  </div>
                  <div class="form-group">
                     <input required type="password" name="password"class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group"><button type="submit" >Login</button></div>
                  
               </form> --}}
           

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