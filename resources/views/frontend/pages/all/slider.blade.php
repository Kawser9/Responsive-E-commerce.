<section id="hero">
  <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"class="carousel slide" ></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      @foreach ($sliders as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : ''}}" >
          <img src="{{url('/uploads/sliders/'.$slider->image)}}" class="d-block w-100" alt="...">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{$slider->title}}</span></h2>
                <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p>
                <a href="{{Route('frontend.product')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Shop Now</a>
              </div>
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

  </div>
</section><!-- End Hero -->





