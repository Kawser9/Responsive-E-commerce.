@extends('backend.master')
@section('content')

    <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Order Details | <a href="{{Route('order.list')}}">Order List</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- end row -->  
                        <form action="{{Route('update.order',$detail->id)}}" method="post">
                            @csrf
                            
                            <label for="">Order Status : </label>
                            <div class="btn-group">
                                <select name="order_status" class="form-select" aria-label="Default select example">
                                          <option value="">Select Status</option>
                                          <option @if ($detail->order_status=='pending') selected @endif value="pending">Pending</option>
                                          <option @if ($detail->order_status=='confirmed') selected @endif value="confirmed">Confirmed</option>
                                          <option @if ($detail->order_status=='packed') selected @endif value="packed">Packed</option>
                                          <option @if ($detail->order_status=='shipped') selected @endif value="shipped">Shipped</option>
                                          <option @if ($detail->order_status=='delivered') selected @endif value="delivered">Delivered</option>
                                </select>
                            </div>
                            <label for="">Payment Status : </label>
                            <div class="btn-group">
                                <select name="payment_status" class="form-select" aria-label="Default select example">
                                          <option @if ($detail->payment_status=='pending') selected @endif value="pending">Pending</option>
                                          <option @if ($detail->payment_status=='paid') selected @endif value="paid">Paid</option>
                                          <option @if ($detail->payment_status=='VALID') selected @endif value="VALID">VALID</option>
                                </select>
                            </div>
                            <br>
                                <button type="submit" class="button">Update</button>
                        </form>
                          

                        
                        
                        
                        <div class="row">
                            <div class="col-lg-12" id="printslip">
                                <div style="text-align: center;">
                                    <h1>Buy Gadget</h1>
                                    <p>Uttara, Dhaka 1230</p>
                                    <h2>Order # {{$detail->id}}</h2>
                                    <p>{{auth()->user()->name}}</p>
                                </div>
                                <div style="text-align: left;">
                                    <h4>Date & Time : {{$detail->created_at}}</h4>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="header-title mb-3">Order Status: {{$detail->order_status}}</h5>
                                        <h5 class="header-title mb-3">Payment Status: {{$detail->payment_status}}</h5>

                                          <br><br>

                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orderDetail as $item)
                                                    <tr>
                                                        <td>{{$item->product->name}}</td>
                                                        <td>{{$item->qty}}</td>
                                                        <td>{{$item->price}} ৳</td>
                                                        <td>{{$item->subtotal}} ৳</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                                        <td><strong>{{$detail->total}} ৳</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <!-- end table-responsive -->
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title mb-3">Shipping Information</h4>
        
                                                <h5> Name: {{$detail->name}}</h5>
                                                
                                                <address class="mb-0 font-14 address-lg">
                                                   Address: {{$detail->address}}<br>
                                                    <abbr title="Email:">E:</abbr> {{$detail->email}} <br/>
                                                    <abbr title="Mobile">M:</abbr> {{$detail->number}}
                                                </address>
                    
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title mb-3">Billing Information</h4>
        
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <p class="mb-2"><span class="fw-bold me-2">Payment Type:</span> {{$detail->payment_method}}</p>
                                                        {{-- <p class="mb-2"><span class="fw-bold me-2">Provider:</span> Visa ending in 2851</p> --}}
                                                        <p class="mb-2"><span class="fw-bold me-2">Date:</span> {{$detail->created_at}}</p>
                                                    </li>
                                                </ul>
                    
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                
                            </div> <!-- end col -->
                            <div class="text-center mt-3">
                                <button onclick="printReport()" class="button">Print Invoice</button>
                            </div>
                            <script>
                                function printReport() {
                                var printContents = document.getElementById("printslip").innerHTML;
                                var originalContents = document.body.innerHTML;
                                document.body.innerHTML = printContents;
                                window.print();
                                document.body.innerHTML = originalContents;
                                }
                            </script>
            
                        
        
                        
                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection