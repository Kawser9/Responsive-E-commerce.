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
                        <h4>{{$product->name}} | <span class="badge badge-primary">{{$product->type}}</h4>
                        <h4>{{$product->price}} BTD</h4>
                        <div class="portfolio-links">
                            @php
                                $encryptID = Crypt::encrypt($product->id);
                            @endphp
                            {{-- <a href="{{Route('frontend.show',$encryptID)}}" class="button">Buy Product</a> --}}
                            <a href="{{Route('frontend.show',$encryptID)}}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            {{-- <a href="{{Route('frontend.show',$product->id)}}" class="btn btn-secondary">Show</a> --}}
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