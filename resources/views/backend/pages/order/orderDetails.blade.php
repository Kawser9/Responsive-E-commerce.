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
                                    <h4 class="page-title">Order Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- end row -->    
                        
                        
                        <div class="row">
                            <div class="col-lg-12" id="printslip">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Items from Order #</h4> 
                                        <form action="{{Route('update.order',$detail->id)}}" method="post">
                                            @csrf
                                            
                                            <div class="btn-group">
                                                <select name="order_status" class="form-select" aria-label="Default select example">
                                                    <option selected>Update Order Status</option>
                                                          <option selected value="pending">Pending</option>
                                                          <option value="confirmed">Confirmed</option>
                                                          <option value="packed">Packed</option>
                                                          <option value="shipped">Shipped</option>
                                                          <option value="delivered">Delivered</option>
                                                </select>
                                            </div>

                                            <div class="btn-group">
                                                <select name="payment_status" class="form-select" aria-label="Default select example">
                                                    <option selected>Update Payment Status</option>
                                                          <option selected value="pending">Pending</option>
                                                          <option value="paid">Paid</option>
                                                </select>
                                            </div>
                                        
                                          <br><br>

                                        <div class="table-responsive">
                                            <table class="table mb-0">
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
                                                    <td>{{$item->price}} BTD</td>
                                                    <td>{{$item->subtotal}} BTD</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div><span>Total : {{$detail->total}} BTD</span></div>
                                        </div>
                                        <!-- end table-responsive -->
                                        <br>
                                        <button type="submit" class="button">save</button>
                                    </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title mb-3">Shipping Information</h4>
        
                                                <h5>{{$detail->name}}</h5>
                                                
                                                <address class="mb-0 font-14 address-lg">
                                                    {{$detail->address}}<br>
                                                    <abbr title="Phone">Email:</abbr> {{$detail->email}} <br/>
                                                    <abbr title="Mobile">M:</abbr> (+01) 12345 67890
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
                                                        <p class="mb-2"><span class="fw-bold me-2">Payment Type:</span> Credit Card</p>
                                                        <p class="mb-2"><span class="fw-bold me-2">Provider:</span> Visa ending in 2851</p>
                                                        <p class="mb-2"><span class="fw-bold me-2">Valid Date:</span> 02/2020</p>
                                                        <p class="mb-0"><span class="fw-bold me-2">CVV:</span> xxx</p>
                                                    </li>
                                                </ul>
                    
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                
                            </div> <!-- end col -->
                            <div>
                                <button onclick="printReport()" class="button">Print Slip</button>
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