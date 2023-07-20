@extends('backend.master')
@section('content')

            @if(session()->has('msg'))
                    <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
                        <h2 class="page-header">Category List |  <a href="{{route('category.create')}}" class="c_button">Create</a>
                        </h2>
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
                                                <a href="{{Route('category.show',$category->id)}}" class="btn btn-info"><i class="fa fa-eye" ></i></a>
                                                <a href="{{Route('category.edit',$category->id)}}" class="btn btn-success"><i class="fa fa-pencil-square"></i></a>
                                                <a href="{{Route('category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
@endsection