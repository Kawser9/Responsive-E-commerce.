@extends('frontend.master')
@section('content')

<br><br>
{{-- <script>
    @if(session('msg'))
    toastr.options = {
       "closeButton": true,
       "progressBar": true
    };
        toastr.success('{{ session('msg') }}');
    @endif
  </script> --}}
            <section id="portfolio" class="portfolio">
                <div class="container">
                    {{-- <form action="{{route('search.by.price')}}" method="get" >
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
                    </form> --}}
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
                        <h4>{{$product->price}} ৳</h4>
                        <div class="portfolio-links">
                            @php
                                $encryptID = Crypt::encrypt($product->id);
                            @endphp
                            {{-- <a href="{{Route('frontend.show',$encryptID)}}" class="button">Buy Product</a> --}}
                            <form action="{{Route('add.to.card',$product->id)}}" method="post">
                                @csrf
                            <button name="quantity" value="1" type="submit"><i class="fa-solid fa-cart-plus fa-xl"></i></button>
                            </form>
                            <a href="{{Route('frontend.show',$encryptID)}}"><i class="fa-solid fa-eye fa-xl"></i></a>
                            {{-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> --}}
                            {{-- <a href="{{Route('frontend.show',$product->id)}}" class="btn btn-secondary">Show</a> --}}
                            {{-- <a href=""><i class="btn bi-lightning-charge-fill"></i></a> --}}
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
            

            
                </div>
            
                </div>
            </section>
    
@endsection