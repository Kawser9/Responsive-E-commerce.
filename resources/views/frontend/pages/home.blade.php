@extends('frontend.master')
@section('content')


<br><br>
<section id="hero">

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"> <!-- Decrease the data-bs-interval value to make the slides change faster -->

      {{-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div> --}}

      <div class="carousel-inner">
          @foreach ($sliders as $key => $slider) <!-- Use a variable to track the active slide -->
          <div class="carousel-item {{$key == 0 ? 'active' : ''}}"> <!-- Set the first slide as active -->
              <img src="{{url('/uploads/sliders/'.$slider->image)}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <h5>{{$slider->title}}</h5>
                  <p>{{$slider->description}}</p>
              </div>
          </div>
          @endforeach
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</section>

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
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-app">App</li>
                      <li data-filter=".filter-card">Product</li>
                      <li data-filter=".filter-web">Web</li>
                    </ul>
                  </div>
                </div>

                <div class="row portfolio-container">

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <img src="frontend/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                          <a href="frontend/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                      <img src="frontend/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                          <a href="frontend/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <img src="frontend/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                          <a href="frontend/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>





                   @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{url('/uploads/products/'.$product->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>{{$product->name}}</h4>
                        <h4>{{$product->price}}</h4>
                        <div class="portfolio-links">
                            <button href="" class="form-group button">Buy Product</button>
                            <a href=""><i class="btn bi-lightning-charge-fill"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach






                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                      <img src="frontend/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                          <a href="frontend/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                 

                 

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                      <img src="frontend/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                          <a href="frontend/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>

                <div class="form">
                  <a class="button" href="{{Route('frontend.product')}}">All Products</a>
                </div>
                  
              
            </section>
            <!-- End Portfolio Section -->

            </main>

@endsection