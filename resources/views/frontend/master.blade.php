
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buy Gadget</title>
{{--  --}}
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ URL('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

  <link href="{{ URL('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ URL('frontend/assets/css/style.css') }}" rel="stylesheet">
  {{-- <link href="{{ URL('frontend/assets/css/addToCard.css') }}" rel="stylesheet"> --}}
  <link href="{{ URL('frontend/forms/form.css') }}" rel="stylesheet">
  {{-- <link href="{{ URL('frontend/assets/css/single-show.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  
 

{{-- 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}



  <!-- =======================================================
  * Template Name: Sailor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->



</head>

<body>

  <!-- ======= Header ======= -->
  

        @include('frontend.fixed.header')


  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

            {{-- @include('frontend.pages.slider') --}}
  <!-- End Hero -->

<!-- End #main -->

<!-- all -->
{{-- @include('frontend.pages.card') --}}

       @yield('content')

<!-- all end -->

            {{-- @include('frontend.pages.form') --}}
  <!-- ======= Footer ======= -->

  @include('frontend.fixed.footer')



  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
  <!-- Vendor JS Files -->
  <script src="{{ URL('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ URL('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ URL('frontend/assets/js/main.js') }}"></script>
  

</body>