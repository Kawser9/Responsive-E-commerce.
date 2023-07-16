@extends('frontend.master')
@section('content')

<body>
	<br><br>
	 <!-- ======= Portfolio Details Section ======= -->
	 <section id="portfolio-details" class="portfolio-details">
		<div class="container">
  
		  <div class="row gy-4">
  
			<div class="col-lg-8">
			  <div class="portfolio-details-slider swiper">
				<div class="swiper-wrapper align-items-center">
  
				  <div class="swiper-slide">
					<img src="{{url('/uploads/products/'.$product->image)}}" alt="">
				  </div>
  
				</div>
				<div class="swiper-pagination"></div>
			  </div>
			</div>
  
			<div class="col-lg-4">
			  <div class="portfolio-info">
				<h3>Product information</h3>
				<ul>
				  <li><strong>Name</strong>: {{$product->name}}</li>
				  <li><strong>Category</strong>: {{$product->catname->name}}</li>
				  <li><strong>Brand</strong>: {{$product->brand_name->name}}</li>
				  <li><strong>Price</strong>: {{$product->price}}  BDT</li>
				</ul>
				<a href="index.html" class="button">Add To Card</a>
				<a href="index.html" class="form-group button">Buy Now</a>
			  </div>
			  <div class="portfolio-description">
				<h2>Details</h2>
				<p>
					{{$product->description}}
				</p>
			  </div>
			</div>
  
		  </div>
  
		</div>
	  </section><!-- End Portfolio Details Section -->

</body>



@endsection