@extends('layout')
@section('content')

                        <div class="card-header py-5">
                            <h6 class="m-0 font-weight-bold text-dark">{{$data->title}}
                                <a href="{{url('admin/category')}}" class="float-end btn btn-success btn-sm">View All Categories</a>
                            </h6>
                        </div>

                        <div class="table-responsive">
                                    <table class="table table-hover table-bordered align-middle mb-0 text-start">
                                    <tr>
                                        <th>Category Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        
                                        <td>{{$data->image_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Featured</th>
                                        <td>{{$data->featured}}</td>
                                    </tr>
                                    <tr>
                                        <th>Active</th>
                                        <td>{{$data->active}}</td>
                                    </tr>
                                      </table>
                        </div>
@endsection