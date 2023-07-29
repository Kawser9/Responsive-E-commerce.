@extends('backend.master')
@section('content')


            @if(session()->has('msg'))
             <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
            <div class="container mt-5">
                    <h2>Brand list |<a href="{{Route('brand.create')}}"class="c_button">Create</a></h2>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($brands as $key=>$brand)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$brand->name}}</td>
                                            <td>{{$brand->description}}</td>
                                            <td>{{$brand->status}}</td>
                                            <td>
                                                <ul>
                                                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye" ></i></a>
                                                    <a href="{{Route('brand.edit',$brand->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                                    <a href="{{Route('brand.delete',$brand->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
            </div>
@endsection