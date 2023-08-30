@extends('frontend.master')
@section('content')


<br><br>


<script>
  @if(session('msg'))
  toastr.options = {
     "closeButton": true,
     "progressBar": true
  };
      toastr.success('{{ session('msg') }}');
  @endif
</script>
            
@include('frontend.pages.all.slider')

            {{-- <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

              <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

              
              <div class="carousel-inner" role="listbox">
 --}}

                <!-- Slide 1 -->
                {{-- @foreach ($sliders as $slider) --}}
                  
                
                {{-- <div class="carousel-item active" style="background-image: ">
                  <img  src="{{url('/uploads/sliders/'.$slider->image)}}" alt=""> --}}
                  {{-- src="{{url('/uploads/sliders/'.$slider->image)}}" --}}
                  {{-- <div class="carousel-container">
                    <div class="container">
                      <h2 class="animate__animated animate__fadeInDown">{{$slider->title}}</h2>
                      <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p> --}}
                      {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                    {{-- </div>
                  </div>
                </div>
                @endforeach
                

              </div>

              <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
              </a>

              <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
              </a>

            </div> --}}
          </section>



          
            <main id="main">

            <!-- ======= Clients Section ======= -->
            {{-- <section id="clients" class="clients section-bg">
              <div class="container">

                <div class="row">

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-1.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-2.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-3.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-4.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-5.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="frontend/assets/img/clients/client-6.png" class="img-fluid" alt="">
                  </div>

                </div>

              </div>
            </section> --}}
            <!-- End Clients Section -->

            <!-- ======= Services Section ======= -->
            <!-- End Services Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
              <div class="container">

                <div class="row">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active"> Products</li>
                      <a class="button" href="{{Route('get.by.product','new')}}">New</a>
                      <a class="button" href="{{Route('get.by.product','upcoming')}}">Upcoming</a>
                      <a class="button" href="{{Route('get.by.product','best sell')}}">Best sell</a>
                    </ul>
                  </div>
                </div>

                <div class="row portfolio-container">


                   @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>{{$product->name}} | <span class="badge badge-primary">{{$product->type}}</span> | @if ($product->quantity > 0) In Stock @else Out of Stock @endif</h4>
                        <h4>{{$product->price}} ৳</h4>
                        <div class="portfolio-links">
                          @php
                            $encryptID=Crypt::encrypt($product->id);
                          @endphp
                          <form action="{{ Route('add.to.card', $product->id) }}" method="post" class="d-inline">
                            @csrf
                            <button value="1" name="quantity" type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </form>
                        
                        <a class="btn btn-primary btn-sm" href="{{ Route('frontend.show', $encryptID) }}">
                          <i class="fa-solid fa-eye fa-sm"></i>
                        </a>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach


                </div>

              </div>


              <div style="text-align: center;">
                <a class="button" href="{{Route('frontend.product')}}">All Products</a>
              </div>
                  
              
            </section>
            <!-- End Portfolio Section -->

            </main>


            <script>
              @if(Session::has('msg'))
              toastr.options =
              {
                  "closeButton" : true,
                  "progressBar" : true
              }
                      toastr.success("{{ session('msg') }}");
              @endif
              </script>

@endsection