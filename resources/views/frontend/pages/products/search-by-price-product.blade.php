@extends('frontend.master')
@section('content')

<br><br>

            <section id="portfolio" class="portfolio">
                <div class="container">
                    <form action="{{route('search.by.price')}}" method="get" >
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="start_date">Start price :</label>
                                <input value="{{request()->start_price}}" type="number" class="form-control" id="start_price" name="start_price" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date">End Price:</label>
                                <input value="{{request()->end_price}}" type="number" class="form-control" id="end_price" name="end_price" required>
                            </div>
                        </div>
                        <button type="submit" class="button">Search</button>
                    </form>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        {{-- <li data-filter="*" class="filter-active">All</li> --}}
                        {{-- <li data-filter=".filter-app">App</li> --}}
                        <li data-filter=".filter-card"class="filter-active">Found: {{$products->count()}}</li>
                        {{-- <li data-filter=".filter-web">Web</li> --}}
                    </ul>
                    </div>
                </div>
            
                <div class="row portfolio-container">
                    @if($products->count() > 0)
                  
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>{{$product->name}} | <span class="badge badge-primary">{{$product->type}}</h4>
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

                    @else

                    <p>No product found.</p>
            
                    @endif
            
                </div>
            
                </div>
            </section>
    
@endsection