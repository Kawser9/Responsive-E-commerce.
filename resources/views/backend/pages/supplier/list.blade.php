@extends('backend.master')
@section('content')

    <div class="container mt-5">
            <h1 class="page-header">Delivary Man List |  <a href="{{route('supplier.create')}}" class="c_button">Create</a>
            </h1>
                <div class="card-body">
                    <table table class="table">
                        <thead>
                            <tr>
                            <th>SL</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$supplier->name}}</td>
                                <td>{{$supplier->phone}}</td>
                                <td>{{$supplier->address}}</td>
                                <td>{{$supplier->image}}</td>
                                <td>
                                    <ul>
                                    <a href="" class="btn btn-info btn-sm "><i class="fa fa-eye" ></i></a>
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