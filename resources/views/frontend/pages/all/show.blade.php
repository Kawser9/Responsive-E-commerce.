<body>
	<div class="container">
		<h1>Product SingleShow</h1>
		<div class="product-image">
			<img src="{{url('/uploads/products/'.$product->image)}}" alt="Product Image">
		</div>
		<div class="product-name">{{$product->name}}</div>
		<div class="product-description">
			{{$product->description}}
		</div>
		<div class="product-price">${{$product->price}}</div>
		{{-- <a href="#" class="btn">Add to Cart</a> --}}
	</div>