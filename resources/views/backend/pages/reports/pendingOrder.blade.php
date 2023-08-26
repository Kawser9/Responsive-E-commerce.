@extends('backend.master')
@section('content')


<body>
    <div class="container mt-5">
      <h1>Select Date</h1>
        <form action="{{Route('order.status')}}" method="get" >

            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>
                <p class="alert alert-danger"> {{$error}}</p>
                </div>
            @endforeach
            @endif  
              
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="start_date">Start Date:</label>
                    <input value="{{request()->start_date}}" type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="end_date">End Date:</label>
                    <input value="{{request()->end_date}}" type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <select name="order_status" class="form-select" aria-label="Default select example" required>
                        <option >Select Status</option>
                            
                                <option @if (request()->order_status == 'pending') selected @endif value="pending">Pending</option>
                                <option @if (request()->order_status == 'confirmed') selected @endif  value="confirmed">Confirmed</option>
                                <option @if (request()->order_status == 'packed') selected @endif value="packed">Packed</option>
                                <option @if (request()->order_status == 'shipped') selected @endif value="shipped">Shipped</option>
                                <option @if (request()->order_status == 'delivered') selected @endif value="delivered">Delivered</option>
                           
                        </select>
                    </div>
                 </div>
            <button type="submit" class="button">Generate Report</button>
        </form>

        

<div class="container mt-5" id="printReport"> 
    <h2 class="page-header">Report of  {{request()->start_date}}  to  {{request()->end_date}}</h2>
    
    
    <br>
    
        <div >
            <table table class="table">
                <thead>
                    <tr>
                    <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($orders))
                    <span>Total product : {{$orders->count()}}</span> 
                    @foreach($orders as $key=>$order)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->order_status}}</td>
                        <td>{{$order->payment_method}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->created_at}}</td>
                        
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <br>
        </div>
    </div>
</div>
</body>
{{-- <button onclick="" class="button">Print Report</button> --}}

<button onclick="printReport()" class="button">Print Report</button>

<script>
    function printReport() {
      var printContents = document.getElementById("printReport").innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>

<!-- Add Bootstrap JS and Popper.js (required for Bootstrap) here -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
   
    {{-- links --}}

{{-- <div class="container mt-5" id="printReport"> 
    <h2 class="page-header">Report of {{request()->start_date}} to {{request()->end_date}}
    </h2>
        <div >
            <table table class="table">
                <thead>
                    <tr>
                    <th>SL</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Adding Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($productsByDate))
                    @foreach($productsByDate as $key=>$product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catname->name}}</td>
                        <td>{{$product->brand_name->name}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->type}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->created_at}}</td>
                        
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            {{$products->links()}}
            <br>
        </div>
    </div>
</div>
<button onclick="" class="btn btn-danger">Print Report</button>
<a class="button" href=""></a> --}}


@endsection