@extends('backend.master')
@section('content')
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
                                                  <a href="" class="btn btn-secondary">Show</a>
                                                  <a href="" class="btn btn-primary">Edit</a>
                                                  <a href="" class="btn btn-danger">Delete</a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection