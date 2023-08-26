@extends('backend.master')
@section('content')            
      

<body>
	<div class="container">
		<h1>Product SingleShow</h1>
		<div class="product-image">
			<img src="{{url('/uploads/products/'.$product->image)}}" alt="Product Image">
		</div>
		<div class="product-name">Name: {{$product->name}}</div>
		<div class="product-name">Category: {{$product->catname->name}}</div>
		<div class="product-name">Brand: {{$product->brand_name->name}}</div>
		<div class="product-description">
			{{$product->description}}
		</div>
		<div class="product-price">Price: {{$product->price}} ৳</div>
	</div>
</body>


@endsection