@extends('backend.master')
@section('content')
                    <div class="container mt-5">
                        <h2 class="page-header">Order List   
                            {{-- <a href="{{route('order.create')}}" class="c_button">Create</a> --}}
                        </h2>
                            <div >
                                <table table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Rechiver</th>
                                            <th>Customer</th>
                                            <th>Email</th>
                                            <th>Phone </th>
                                            <th>Address</th>
                                            <th>Payment </th>
                                            <th>Total</th>
                                            <th>Order time</th>
                                            <th>Payment Status</th>
                                            <th>Order Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->customer->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->number}}</td>
                                            <td>{{$order->address}}</td>
                                            <td>{{$order->payment_method}}</td>
                                            <td>{{$order->total}} ৳</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>
                                                <span class="order-status {{$order->payment_status}}">
                                                    {{$order->payment_status}}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="order-status {{$order->order_status}}">
                                                    {{$order->order_status}}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{Route('order.details',$order->id)}}" class="btn btn-info btn-sm me-2">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


@endsection

<style>
    .order-status {
        padding: 3px 5px;
        border-radius: 9px;
        font-weight: bold;
    }

    .order-status.pending {
        color: white;
        background-color: red;
    }

    .order-status.confirmed {
        color: white;
        background-color: green;
    }

    .order-status.packed {
        color: white;
        background-color: blue;
    }

    .order-status.shipped {
        color: white;
        background-color: orange;
    }

    .order-status.delivered {
        color: white;
        background-color: #007bff;
    }
    .order-status.paid {
        color: white;
        background-color: #0fff3b;
    }
    .order-status.VALID {
        color: white;
        background-color: #0fff3b;
    }
</style>

