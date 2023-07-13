@extends('backend.master')
@section('content')
            @if(session()->has('msg'))
            <p class="alert alert-success"> {{session()->get('msg')}}</p>
            @endif
                        <h1 class="page-header">Slider List |  <a href="{{route('slider.create')}}" class="c_button">Create</a>
                        </h1>
                            <div >
                                <table table class="table">
                                    <thead>
                                        <tr>
                                        <th>SL</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $key=>$slider)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->description}}</td>
                                            <td>
                                                    <img src="{{url('/uploads/sliders/'.$slider->image)}}"style="width: 50px;" alt="">
                                            </td>
                                            <td style="inset-inline: ">
                                              <ul>
                                                  {{-- <a href="{{Route('slider.show',$slider->id)}}" class="btn btn-secondary">Show</a>
                                                  <a href="{{Route('slider.edit',$slider->id)}}" class="btn btn-primary">Edit</a> --}}
                                                  <a href="{{Route('slider.delete',$slider->id)}}" class="btn btn-danger">Delete</a>
                                              </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$sliders->links()}}
                                <br>
                            </div>
                        </div>
                    </div>
@endsection