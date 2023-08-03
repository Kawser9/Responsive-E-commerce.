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
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($customers as $customer)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->password}}</td>
                                            <td>
                                              <ul>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye" ></i></a>
                                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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