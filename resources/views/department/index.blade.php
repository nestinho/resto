@extends('layout')
@section('title','All Departments')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Departments
                                <a href="{{url('department/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Director</th>
                                            <th>Employees</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Director</th>
                                            <th>Employees</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                    	@if($data)
	                                    	@foreach($data as $d)
	                                        <tr>
	                                            <td>{{$i++}}</td>
                                                <td>{{$d->title}}</td>
                                                <td></td>
                                                <td>{{$d->employee->count()}}</td>  
                                                <td>
                                                    <a href="{{url('department/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('department/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('department/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
	                                        </tr>
	                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>

@endsection