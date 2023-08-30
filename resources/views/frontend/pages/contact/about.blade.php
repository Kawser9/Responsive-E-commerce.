@extends('frontend.master')
@section('content')

<br><br>
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>About Us</h2>
      <ol>
        <li><a href="{{Route('home')}}">Home</a></li>
        <li>About Us</li>
      </ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="https://euc.ac.cy/wp-content/uploads/2019/07/students-must-have-gadget-list.jpg" class="img-fluid" alt="About Us">
      </div>
      <div class="col-lg-6">
        <div class="about-content">
          <h2>Discover Buy Gadget: Your Gadget Wonderland</h2>
          <p>Welcome to Buy Gadget, where all things gadgetry come to life. Dive into a realm of innovation, from smart home marvels to wearable tech wonders. Quality is our hallmark, ensuring you access the best from renowned brands. Stay ahead with the latest gadgets, backed by our dedicated customer support. Shop securely and step into tomorrow – with Buy Gadget, the future is just a click away.</p>
          <p>Nullam euismod, nisi a convallis laoreet, libero lectus ornare velit, sit amet cursus odio arcu eu tortor. Vivamus sollicitudin eros nec varius luctus.</p>
          <p>Etiam ut odio vel tortor volutpat interdum. Suspendisse potenti. Phasellus eget ligula quis augue pulvinar rhoncus in at sem.</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

@endsection
