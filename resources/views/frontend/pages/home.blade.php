@extends('frontend.master')
@section('content')


<br><br>

            
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

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container">

                <div class="row content">
                  <div class="col-lg-6">
                    <h2>Eum ipsam laborum deleniti velitena</h2>
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                      <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                  </div>
                </div>

              </div>
            </section><!-- End About Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
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
            </section><!-- End Clients Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
              <div class="container">

                <div class="row">
                  <div class="col-md-6">
                    <div class="icon-box">
                      <i class="bi bi-briefcase"></i>
                      <h4><a href="#">Lorem Ipsum</a></h4>
                      <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                      <i class="bi bi-card-checklist"></i>
                      <h4><a href="#">Dolor Sitema</a></h4>
                      <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                      <i class="bi bi-bar-chart"></i>
                      <h4><a href="#">Sed ut perspiciatis</a></h4>
                      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                      <i class="bi bi-binoculars"></i>
                      <h4><a href="#">Nemo Enim</a></h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                      <i class="bi bi-brightness-high"></i>
                      <h4><a href="#">Magni Dolore</a></h4>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                      <i class="bi bi-calendar4-week"></i>
                      <h4><a href="#">Eiusmod Tempor</a></h4>
                      <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                  </div>
                </div>

              </div>
            </section><!-- End Services Section -->

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
                        <h4>{{$product->name}} | <span class="badge badge-primary">{{$product->type}}</span></h4>
                        <h4>{{$product->price}}</h4>
                        <div class="portfolio-links">
                          @php
                            $encryptID=Crypt::encrypt($product->id);
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

                <div class="form">
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