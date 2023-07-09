@extends('backend.master')
@section('content')

            @if(session()->has('msg'))
                    <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
                        <h1 class="page-header">Category List |  <a href="{{route('category.create')}}" class="c_button">Create</a>
                        </h1>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>{{$category->status}}</td>
                                            <td>
                                                <img src="{{url('/uploads/category/'.$category->image)}}"style="width: 50px;" alt="">
                                            </td>
                                            <td>
                                              <ul>
                                                  <a href="{{Route('category.show',$category->id)}}" class="btn btn-secondary">Show</a>
                                                  <a href="{{Route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                                  <a href="{{Route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
@endsection