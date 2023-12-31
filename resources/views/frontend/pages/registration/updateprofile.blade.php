@extends('frontend.master')
@section('content')

<br> <br><br><br>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-3 my-lg-0 my-md-1">
            <div id="sidebar" class="bg-purple">
                <div class="h4 text-white">Account</div>
                <ul>
                    <li class="active">
                        <a href="{{Route('customer.profile')}}" class="text-decoration-none d-flex align-items-start">
                            <div class="far fa-user pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">My Profile</div>
                                <div class="link-desc">Change your profile details</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('my.order',auth('customer')->user()->id)}}" class="text-decoration-none d-flex align-items-start">
                            <div class="fas fa-box-open pt-2 me-3"></div>
                            <div class="d-flex flex-column">
                                <div class="link">My Orders</div>
                                <div class="link-desc">View & Manage orders and returns</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 my-lg-0 my-1">
            <form class="form" action="{{Route('customer.update',auth('customer')->user()->id)}}" method="post" enctype="multipart/form-data">
                <h2>Edit Profile</h2>
                @csrf
        
                <div class="form-group">
                    <input required type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('customer')->user()->name}}">
                </div>
        
        
                <div class="form-group">
                <input required type="email" name="email" class="form-control" id="exampleInputPassword1 " value="{{auth('customer')->user()->email}}">
                </div>
        
                <div class="form-group">
                    <input type="phone" name="phone" class="form-control" id="number " value="{{auth('customer')->user()->phone}}">
                </div>
                
                <div class="form-group">
                    <input type="text" name="address" class="form-control" id="address" value="{{auth('customer')->user()->address}}">
                </div>
{{--         
                <div class="form-group">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1 " value="{{auth('customer')->user()->email}}">
                </div> --}}
                <div class="form-group">
                    <input type="file" name="image" class="form-control" id="image " value="{{auth('customer')->user()->image}}">
                </div>
                <div class="form-group"><button type="submit" >Save</button></div>
            </form>
        </div>
    </div>

</div>




<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap');

/* Resetting */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

nav {
    min-height: 70px;
}

nav .navbar-brand .logo {
    padding: 10px 15px;
    border-radius: 8px;
}

nav .navbar-brand .logo .h2 {
    margin: 0;
}

nav .navbar-brand .h4 {
    margin-bottom: 0px;
    font-weight: 900;
}

nav .navbar-brand .fs-6 {
    font-size: 0.88rem !important;
}

nav ul li {
    padding: 0 20px;
}

.navbar-light .navbar-nav .nav-link {
    color: #333;
}

.navbar-light .navbar-nav .nav-link:hover {
    color: #4e2296;
}

.navbar-light .navbar-nav .nav-link.active {
    color: #451296;
}

nav ul li a .cart {
    padding: 4px 6px;
    border-radius: 6px;
    position: relative;
    display: inline;
}

nav ul li a .cart::after {
    position: absolute;
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #ff5252;
    top: -1px;
}

.navbar-toggler:focus {
    box-shadow: none;
}

#sidebar {
    padding: 15px 0px 15px 0px;
    border-radius: 10px;
}

#sidebar .h4 {
    font-weight: 500;
    padding-left: 15px;
}

#sidebar ul {
    list-style: none;
    margin: 0;
    padding-left: 0rem;
}

#sidebar ul li {
    padding: 10px 0;
    display: block;
    padding-left: 1rem;
    padding-right: 1rem;
    border-left: 5px solid transparent;
}

#sidebar ul li.active {
    border-left: 5px solid #ff5252;
    background-color: #44007c;
}

#sidebar ul li a {
    display: block;
}

#sidebar ul li a .fas,
#sidebar ul li a .far {
    color: #ddd;
}

#sidebar ul li a .link {
    color: #fff;
    font-weight: 500;
}

#sidebar ul li a .link-desc {
    font-size: 0.8rem;
    color: #ddd;
}

#main-content {
    padding: 30px;
    border-radius: 15px;
}

#main-content .h5,
#main-content .text-uppercase {
    font-weight: 600;
    margin-bottom: 0;
}

#main-content .h5+div {
    font-size: 0.9rem;
}

#main-content .box {
    padding: 10px;
    border-radius: 6px;
    width: 170px;
    height: 90px;
}

#main-content .box img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

#main-content .box .tag {
    font-size: 0.9rem;
    color: #000;
    font-weight: 500;
}

#main-content .box .number {
    font-size: 1.5rem;
    font-weight: 600;
}

.order {
    padding: 10px 30px;
    min-height: 150px;
}

.order .order-summary {
    height: 100%;
}

.order .blue-label {
    background-color: #aeaeeb;
    color: #0046dd;
    font-size: 0.9rem;
    padding: 0px 3px;
}

.order .green-label {
    background-color: #a8e9d0;
    color: #008357;
    font-size: 0.9rem;
    padding: 0px 3px;
}

.order .fs-8 {
    font-size: 0.85rem;
}

.order .rating img {
    width: 20px;
    height: 20px;
    object-fit: contain;
}

.order .rating .fas,
.order .rating .far {
    font-size: 0.9rem;
}

.order .rating .fas {
    color: #daa520;
}

.order .status {
    font-weight: 600;
}

.order .btn.btn-primary {
    background-color: #fff;
    color: #4e2296;
    border: 1px solid #4e2296;
}

.order .btn.btn-primary:hover {
    background-color: #4e2296;
    color: #fff;
}

.order .progressbar-track {
    margin-top: 20px;
    margin-bottom: 20px;
    position: relative;
}

.order .progressbar-track .progressbar {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 0rem;
}

.order .progressbar-track .progressbar li {
    font-size: 1.5rem;
    border: 1px solid #333;
    padding: 5px 10px;
    border-radius: 50%;
    background-color: #dddddd;
    z-index: 100;
    position: relative;
}

.order .progressbar-track .progressbar li.green {
    border: 1px solid #007965;
    background-color: #d5e6e2;
}

.order .progressbar-track .progressbar li::after {
    position: absolute;
    font-size: 0.9rem;
    top: 50px;
    left: 0px;
}

#tracker {
    position: absolute;
    border-top: 1px solid #bbb;
    width: 100%;
    top: 25px;
}

#step-1::after {
    content: 'Placed';
}

#step-2::after {
    content: 'Accepted';
    left: -10px;
}

#step-3::after {
    content: 'Packed';
}

#step-4::after {
    content: 'Shipped';
}

#step-5::after {
    content: 'Delivered';
    left: -10px;
}



/* Backgrounds */
.bg-purple {
    background-color: #55009b;
}

.bg-light {
    background-color: #f0ecec !important;
}

.green {
    color: #007965 !important;
}

/* Media Queries */
@media(max-width: 1199.5px) {
    nav ul li {
        padding: 0 10px;
    }
}

@media(max-width: 500px) {
    .order .progressbar-track .progressbar li {
        font-size: 1rem;
    }

    .order .progressbar-track .progressbar li::after {
        font-size: 0.8rem;
        top: 35px;
    }

    #tracker {
        top: 20px;
    }
}

@media(max-width: 440px) {
    #main-content {
        padding: 20px;
    }

    .order {
        padding: 20px;
    }

    #step-4::after {
        left: -5px;
    }
}

@media(max-width: 395px) {
    .order .progressbar-track .progressbar li {
        font-size: 0.8rem;
    }

    .order .progressbar-track .progressbar li::after {
        font-size: 0.7rem;
        top: 35px;
    }

    #tracker {
        top: 15px;
    }

    .order .btn.btn-primary {
        font-size: 0.85rem;
    }
}

@media(max-width: 355px) {
    #main-content {
        padding: 15px;
    }

    .order {
        padding: 10px;
    }
}
</style>

@endsection