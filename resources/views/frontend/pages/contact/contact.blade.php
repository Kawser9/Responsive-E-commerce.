@extends('frontend.master')
@section('content')

<br><br>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Contact</h2>
      <ol>
        <li><a href="{{Route('home')}}">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-6">
        <div class="info-box">
          <i class="bi bi-geo-alt"></i>
          <h3>Location</h3>
          <p>Embankment Drive Road, Dhaka 1230, Bangladesh</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p>buygadget@gmail.com</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box">
          <i class="bi bi-phone"></i>
          <h3>Call</h3>
          <p>+8801608406596</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box">
          <i class="bi bi-clock"></i>
          <h3>Hours</h3>
          <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 2:00 PM</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

@endsection
