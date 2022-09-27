@extends('layout')
@section('content')
<!-- Body: Body -->


<div class="card mb-3">
                            <div class="card-header py-3  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">View All Food Categories 
                                  <a href="{{url('category/create')}}" class="float-end btn btn-success btn-md"><i class="fa fa-edit"></i>Add New Category</a></h6> 
                                
                            </div>
                            <div class="card-body  variants-custome-color">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0 text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Category Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Featured</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                          @if($data)
                                            @foreach($data as $d)
                                            <tr class="table-success">
                                                <td>{{$i++}}</td>
                                                <td scope="row">{{$d->title}}</td>
                                                <td><img src="{{asset('public/images/'.$d->image_name)}}" width="80" style="border-radius: 12px"/></td>
                                                <td>{{$d->featured}}</td>
                                                <td>{{$d->active}}</td>
                                                <td>
                                                  <a href="{{url('category/'.$d->id)}}" class="btn btn-info btn-md"><i class="fa fa-eye"></i>Show</a>
                                                  <a href="{{url('category/'.$d->id.'/edit')}}" class="btn btn-primary btn-md">Update</a>
                                                  <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('category/'.$d->id.'/delete')}}" class="btn btn-danger btn-md">Delete</a>
                                                </td>
                                            </tr>  
                                            @endforeach
                                          @endif
                                      
                                        </tbody>
                                        <tfooter>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Category Title:</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Featured</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </tfooter>
                                      </table>                                  
                                </div>
                            </div>
                        </div>

</div>
@endsection