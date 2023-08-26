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
                                            <td>{{$order->payment_status}}</td>
                                            <td>{{$order->order_status}}</td>
                                            <td style="inset-inline: ">
                                                <ul class="culumn justify-content-center ">
                                                    <a href="{{Route('order.details',$order->id)}}" class="btn btn-info btn-sm "><i class="fa fa-eye" ></i></a>
                                                </ul>
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