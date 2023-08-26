@extends('frontend.master')
@section('content')

<br><br>

            <section id="portfolio" class="portfolio">
                <div class="container">
            
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <a class="button" href="{{Route('frontend.product')}}">All products</a>
                        <a class="button" href="{{Route('filter.by.product','new')}}">New</a>
                        <a class="button" href="{{Route('filter.by.product','upcoming')}}">Upcoming</a>
                        <a class="button" href="{{Route('filter.by.product','best sell')}}">Best sell</a>
                    </ul>
                    </div>
                </div>
            
                <div class="row portfolio-container">
            
                  
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>{{$product->name}} | <span class="badge badge-primary">{{$product->type}} | @if ($product->quantity > 0) In Stock @else Out of Stock @endif</h4>
                        <h4>{{$product->price}}  ৳</h4>
                        <div class="portfolio-links">
                            @php
                                $encryptID = Crypt::encrypt($product->id);
                            @endphp
                            <a href="{{Route('add.to.card',$product->id)}}"><i class="fa-solid fa-cart-plus fa-xl"></i></i></a>
                            <a href="{{Route('frontend.show',$encryptID)}}"><i class="fa-solid fa-eye fa-xl"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
            

            
                </div>
            
                </div>
            </section>
    
@endsection