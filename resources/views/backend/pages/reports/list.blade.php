@extends('backend.master')
@section('content')

<body>
  <div class="container mt-5">
    <h1 class="mb-4">Reports List</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Sample Report Cards - Replace with your data -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Product Report</h3>
            <a class="btn btn-primary btn-block" href="{{Route('getByTimeReport')}}">Report by time</a>
            <a class="btn btn-primary btn-block" href="">Report by type</a>
            <a class="btn btn-primary btn-block" href="">Report by category</a>
           <a class="btn btn-primary btn-block" href="">Report by brands</a>
          </div>
        </div>
      </div>
      {{-- <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title">Product Report</h3>
            <a class="btn btn-primary btn-block" href="">Report by time</a>
            <a class="btn btn-primary btn-block" href="">Report by type</a>
            <a class="btn btn-primary btn-block" href="">Report by category</a>
           <a class="btn btn-primary btn-block" href="">Report by brands</a>
          </div>
        </div>
      </div> --}}
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Report 2</h5>
            <p class="card-text">Nullam malesuada quam vel libero fermentum, non lacinia arcu tristique.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Report 3</h5>
            <p class="card-text">Vestibulum facilisis tellus a sapien vestibulum, vel dignissim mauris dapibus.</p>
          </div>
        </div>
      </div>
      <!-- Add more cards here for additional reports -->
    </div>
  </div>

  <!-- Add Bootstrap JS and Popper.js (required for Bootstrap) here -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>


@endsection