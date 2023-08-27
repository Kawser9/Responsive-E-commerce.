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
				<h3>{{$product->name}}</h3>
				<ul>
				  {{-- <li><strong>Name</strong>: </li> --}}
				  {{-- <li><strong>Category</strong>: {{$product->catname->name}}</li> --}}
				  <li><strong>Brand</strong>: {{$product->brand_name->name}}</li>
				  <li><strong>Price</strong>: {{$product->price}}  ৳</li>
				  <li><strong>Stock</strong>:
					@if ($product->quantity > 0)
						In Stock
					@else 
						Out of Stock
					@endif
					({{ $product->quantity }})
				  </li>
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
					@if ($product->quantity > 0)
						<button type="submit" class="button">Add To Card</button>
					@else 
						<a class="button">Out of Stock</a>
					@endif
					
				</form>
				{{-- <a href="{{Route('add.to.card',$product->id)}}" class="button">Add To Card</a> --}}
			  </div>
			  <div class="portfolio-description">
				<h2>Details</h2>
				<p>
					{{$product->description}}
				</p>
			  </div>
			  <div class="portfolio-description">
				<h2><i class="fa-regular fa-comment"></i> View comments</h2>
				{{-- --}}

				<div class="row d-flex justify-content-center">
					<div class="col-md-12 col-lg-12">
					  <div class="card shadow-0 border" style="background-color: #f0f2f5;">
						<div class="card-body p-4">

							@if (auth('customer')->user())
							<form action="{{Route('comment.store')}}" method="post">
								@csrf
								<div class="form-outline mb-4">
									<input type="text" name="product_id" value="{{$product->id}}"><br>
									<input type="text" name="customer_id" value="{{auth('customer')->user()->id}}"><br>
									<input type="text" name="comment" id="addANote" class="form-control" placeholder="Type comment..." />
									<br>
									<button type="submit" class="form-label" for="addANote">+ Add a Comments</button>
								</div>
							</form>
							@else
							Do login for comments.
							@endif




						@foreach ($comments as $comment)
						  <div class="card mb-8">
							<div class="card-body">
							  <p>{{$comment->comment}}</p>
				  
							  <div class="d-flex justify-content-between">
								<div class="d-flex flex-row align-items-center">
								  <img src="{{url('/uploads/customers/'.$comment->customer->image)}}" alt="avatar" width="25"
									height="25" />
								  <p class="small mb-0 ms-2">{{$comment->customer->name}}</p>
								</div>
								<div class="d-flex flex-row align-items-center">
								  <p class="small text-muted mb-0"></p>
								  {{-- <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i> --}}
								  <p class="small text-muted mb-0">....</p>
								</div>
							  </div>
							</div>
						  </div>
						@endforeach
						 
						</div>
					  </div>
					</div>
				  </div>
				{{--  --}}
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