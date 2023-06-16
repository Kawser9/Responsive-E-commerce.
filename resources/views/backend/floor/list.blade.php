@extends('backend.master')
@section('content')
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                             Flore List | <a href="" class="primary">Create</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                             <th>1</th>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                              <button class="primary-btn">
                                                <a href="">Show</a>
                                              </button>
                                              <button class="primary-btn">
                                                <a href="">Edit</a>
                                              </button>
                                              <button class="primary-btn">
                                                <a href="">Delete</a>
                                              </button>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                           <th>2</th>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>
                                              <button class="primary-btn">Show</button>
                                              <button class="primary-btn">Edit</button>
                                              <button class="primary-btn">Delete</button>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection