@extends('frontend.master')
@section('content')

<br><br>

            <section id="portfolio" class="portfolio">
                <div class="container">
            
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        {{-- <li data-filter="*" class="filter-active">All</li> --}}
                        {{-- <li data-filter=".filter-app">App</li> --}}
                        <li data-filter=".filter-card"class="filter-active">Products</li>
                        {{-- <li data-filter=".filter-web">Web</li> --}}
                    </ul>
                    </div>
                </div>
            
                <div class="row portfolio-container">
            
                  
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <p>{{$product->name}}</p>
                        <p>{{$product->price}}</p>
                        <div class="portfolio-links">
                            <button href="" class="btn btn-success">Buy Product</button>
                            <a href=""><i class="btn bi-lightning-charge-fill"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
            

            
                </div>
            
                </div>
            </section>
    
@endsection