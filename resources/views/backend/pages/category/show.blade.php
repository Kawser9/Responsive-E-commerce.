@extends('backend.master')
@section('content')            
      
          {{-- <h1>Sigle Show</h1>
          
          <br> 
        <ul><h4>Name:{{$product->name}}</h4>
         <h4>Price:{{$product->price}}</h4>
         <h4>Quantity:{{$product->quantity}}</h4>
         <h4>Status:{{$product->status}}</h4>
         <h4>Description:{{$product->description}}</h4>
            <h4>Picture: </h4>
                 <img src="{{url('/uploads/products/'.$product->image)}}"style="width: 400px;">
           
        </ul>  --}}

<body>
	<div class="container">
		<h1>Product SingleShow</h1>
		<div class="product-image">
			<img src="{{url('/uploads/category/'.$category->image)}}" alt="Category Image">
		</div>
		<div class="product-name">{{$category->name}}</div>
		<div class="product-description">
			{{$category->description}}
		</div>
		{{-- <div class="product-price">${{$category->price}}</div> --}}
		{{-- <a href="#" class="btn">Add to Cart</a> --}}
	</div>

	{{-- <div class="footer">
		<p>&copy; 2023 Product Showcase. All rights reserved.</p>
	</div> --}}
</body>


@endsection