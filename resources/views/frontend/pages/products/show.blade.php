@extends('frontend.master')
@section('content')

<body>
	<br><br>
	

	 <section id="portfolio-details" class="portfolio-details">
		<div class="container">
			@if(session()->has('msg'))
				<p class="alert alert-success"> {{session()->get('msg')}}</p>
			@endif
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
				<form action="{{Route('add.to.card',$product->id)}}" method="post">
					@csrf
					<div class="quantity">
						<label for="quantity"><strong>Quantity</strong>:</label>
						<div class="input-group">
							<button class="btn btn-outline-secondary quantity-button" type="button" id="decrement">-</button>
							<input type="number" class="form-control quantity-input" name="quantity" id="quantity" value="1" min="1">
							<button class="btn btn-outline-secondary quantity-button" type="button" id="increment">+</button>
						</div>
					</div>
					<br>
					<button type="submit" class="button">Add To Card</button>
				</form>
				{{-- <a href="{{Route('add.to.card',$product->id)}}" class="button">Add To Card</a> --}}
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
	  </section>
	  <script>
		document.addEventListener("DOMContentLoaded", function () {
			const decrementButton = document.getElementById("decrement");
			const incrementButton = document.getElementById("increment");
			const quantityInput = document.getElementById("quantity");
  
			decrementButton.addEventListener("click", function () {
				const currentValue = parseInt(quantityInput.value);
				if (currentValue > 1) {
					quantityInput.value = currentValue - 1;
				}
			});
  
			incrementButton.addEventListener("click", function () {
				const currentValue = parseInt(quantityInput.value);
				quantityInput.value = currentValue + 1;
			});
		});
	</script>

</body>



@endsection