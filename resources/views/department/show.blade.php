@extends('layout')
@section('title','View Department')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Department
        <a href="{{url('department')}}" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td>
                    {{$data->title}}
                </td>
            </tr>
            <tr>
                <th>Total Employees</th>
                <td>
                    {{$data->employee->count()}}
                </td>
            </tr>
            <tr>
                <th>Head Of Department</th>
                <td>
                    {{$data->director->full_name}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection