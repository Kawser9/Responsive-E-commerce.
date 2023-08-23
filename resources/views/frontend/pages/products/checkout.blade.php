@extends('frontend.master')
@section('content')
<br><br><br>

<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
  
<div class="container mt-5">
<main>
  {{-- <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div> --}}

  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        <span class="badge bg-primary rounded-pill">{{session()->has('cart')?count(session()->get('cart')):0}}</span>
      </h4>
      <ul class="list-group mb-3">
        @if (session()->has('cart'))
            @foreach (session()->get('cart') as $cart)
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                    <h6 class="my-0">{{$cart['name']}}</h6>
                    <small class="text-muted">Description</small>
                    </div>
                    <span class="text-muted">{{$cart['price']}} BTD</span>
                </li>
            @endforeach
        @endif
       
        
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>.........</small>
          </div>
          <span class="text-success">−$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (BTD)</span>
          <strong>{{session()->has('cart') ? array_sum(array_column(session()->get('cart'),'sub_total')):0}} BTD</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </form>
    </div>
    <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Billing address</h4>

      <form class="needs-validation" action="{{route('place.order')}}" method="post">
        @csrf
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input name="firstName" type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input name="lastName" type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          
          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input name="email" type="email" class="form-control" id="email" placeholder="">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>
          <div class="col-12">
            <label for="number" class="form-label">Phone Number </label>
            <input name="number" type="number" class="form-control" id="number" placeholder="">
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="address" placeholder="" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
        <hr class="my-4">

        <h4 class="mb-3">Payment</h4>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" value="COD" name="paymentMethod" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="credit">COD</label>
          </div>
          <div class="form-check">
            <input id="debit" value="SSL" name="paymentMethod" type="radio" class="form-check-input" required>
            <label class="form-check-label" for="debit">SSL</label>
          </div>
        </div>

        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>
</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
 
</footer>
</div>

@endsection