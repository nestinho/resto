@extends('layout')
@section('content')

<!-- Body: Body -->

<h1 class="text-muted">Dashboard</h1>
<h6 class="text-success py-3">Welcome - <strong>{{$admin->full_name}}</strong></h6>

<div class="row gx-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-3">
                            <div class="col">
                                <a href="{{ url('orders') }}" >
                                    <div class="card mb-3 bg-success">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Orders</div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $order->count() }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('category') }}">
                                    <div class="card mb-3 bg-primary">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Categories</div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $category->count() }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('food') }}" >
                                    <div class="card mb-3 bg-warning">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Food </div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $food->count() }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
</div>

<div class="row gx-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-3">
                            <div class="col">
                                <a href="{{ url('manager') }}" >
                                    <div class="card mb-3 bg-success">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Managers </div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $manager->count() }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ url('staff') }}" >
                                    <div class="card mb-3 bg-primary">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Staff </div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $staff->count() }}</h3>
                                        </div>
                                    </div>
                                </a> 
                            </div>
                            <div class="col">
                                <a href="{{ url('department') }}" >
                                    <div class="card mb-3 bg-warning">
                                        <div class="card-header">
                                            <div id="apexspark3" class="fw-bold text-center text-light pt-3">Total Departments </div>
                                        </div>
                                        <div class="card-body text-center text-light">
                                            <h3>{{ $department->count() }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
</div>



@endsection