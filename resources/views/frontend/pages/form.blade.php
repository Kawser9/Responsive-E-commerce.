    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="getstarted">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
            <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
        @endif

        <form action="{{route('customer.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input required type="text" name="name"class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input required type="email" name="email"class="form-control" id="price" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="" class="form-label" >Phone</label>
          <input required type="number" name="phone" class="form-control" id="exampleInputPassword1 "placeholder="Enter phone number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
    </section><!-- End Book A Table Section -->