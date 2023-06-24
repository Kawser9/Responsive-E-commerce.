@extends('backend.master')
@section('content')

<h1 class="page-header">Brand list |<a href="{{Route('brand.create')}}"class="btn btn-success">Create</a></h1>

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
@endsection