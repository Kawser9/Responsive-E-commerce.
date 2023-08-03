


<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{Route('home')}}">E-Commerce</a></h1>
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
          <li><a href="{{Route('home')}}" class="">Home</a></li>
          {{-- @dd($category) --}}

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
          
          {{-- <li class="dropdown"><a href="#"><span>Brands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($brands as $brand)
                 <li><a href="">{{$brand->name}}</a></li>
              @endforeach
            </ul> --}}

            {{-- <li class="dropdown"><a href="#"><span>Type</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                @foreach($products as $product)
                   <li><a href="">{{$product->type}}</a></li>
                @endforeach
              </ul> --}}

              {{-- <li class="dropdown"><a href="#"><span>Type</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{Route('get.by.product','new')}}">New</a></li>
                    <li><a href="{{Route('get.by.product','upcoming')}}">Upcoming</a></li>
                    <li><a href="{{Route('get.by.product','best sell')}}">Best sell</a></li>
                </ul> --}}

          <li><a href="{{Route('frontend.product')}}">Products</a></li>

          <li><a href="{{Route('contact')}}">Contact</a></li>
          {{-- <li><a href="{{Route('customer.profile')}}"><i class="fa-solid fa-user fa-xl"></i></a></li> --}}
          
        @if (auth('customer')->user())
          
        
          <li class="dropdown"><a href="#"><span><i class="fa-solid fa-user fa-xl"></i></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                 <li><a href="">{{auth('customer')->user()->name}}</a></li>
                 <li><a href="{{Route('customer.profile')}}">My Profile</a></li>
                 <li><a href="{{Route('customer.logout')}}">Logout</a></li>
             
            </ul>
        @else
            
          <li><a href="{{Route('frontend.login')}}" class="getstarted">Login</a></li>
        @endif
        <li><a href="{{Route('view.card')}}" ><i class="fa-solid fa-cart-shopping fa-beat fa-xl"></i></a></li>


          {{-- <a href="{{Route('view.card')}}" class="btn btn-info btn-sm "><i class="fa-solid fa-cart-shopping" ></i></a> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>