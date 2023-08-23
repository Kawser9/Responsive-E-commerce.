@extends('backend.master')
@section('content')


                <div class="container mt-5">
                        <h1 class="page-header">Customer List </h1>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone </th>
                                            <th>Address </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone </th>
                                            <th>Address </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($customers as $customer)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->address}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection