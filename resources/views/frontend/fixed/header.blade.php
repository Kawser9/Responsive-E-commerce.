


<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{Route('home')}}">E-Commerse</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      {{-- <div class="search-box">
        <form action="{{Route('search')}}" method="GET">
          <input type="text" name="search" placeholder="Search Product ...">
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div> --}}

      <nav id="navbar" class="navbar">
        <ul>

          <li>
            <div class="search-box">
              <form action="{{Route('search')}}" method="GET">
                <input type="text" name="search" placeholder="Search Product ...">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div>
          </li>
          <li><a href="{{Route('home')}}" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              @foreach ($category as $cat)
              @php
                $encryptID=Crypt::encrypt($cat->id);
              @endphp
              <li>
                <a href="{{Route('category.product',$encryptID)}}">{{$cat->name}}</a>
              </li>
              @endforeach
              

              <li class="dropdown"><a href="#"><span>Nothing</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Nothing</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Brands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($brands as $brand)
                 <li><a href="">{{$brand->name}}</a></li>
              @endforeach
            </ul>
          <li><a href="{{Route('frontend.product')}}">Products</a></li>

          <li><a href="{{Route('contact')}}">Contact</a></li>
          <li><a href="{{Route('frontend.login')}}" class="getstarted">Login</a></li>
          {{-- <li><a href="{{Route('registration')}}" class="getstarted">Registration</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>