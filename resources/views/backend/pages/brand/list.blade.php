@extends('backend.master')
@section('content')


            @if(session()->has('msg'))
             <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
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
                                                  <a href="" class="btn btn-secondary">Show</a>
                                                  <a href="{{Route('brand.edit',$brand->id)}}" class="btn btn-primary">Edit</a>
                                                  <a href="{{Route('brand.delete',$brand->id)}}" class="btn btn-danger">Delete</a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
@endsection