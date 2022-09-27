@extends('layout')
@section('content')

                        <div class="card-header py-5">
                            <h6 class="m-0 font-weight-bold text-dark">{{$data->title}}
                                <a href="{{url('food')}}" class="float-end btn btn-success btn-sm">View All Food</a>
                            </h6>
                        </div>

                        <div class="table-responsive">
                                    <table class="table table-hover table-bordered align-middle mb-0 text-start">
                                    <tr>
                                        <th>Food Name</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Food Category</th>
                                        <td>{{$data->foodcategory->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>{{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td><img src="{{asset('public/images/'.$data->image_name)}}" style="border-radius: 12px" width="200" /></td>
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