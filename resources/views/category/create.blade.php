@extends('layout')
@section('content')

<!-- Body: Body -->

<div class="card mb-3">
                            <div class="card-header py-3  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Add Food Category
                                 <a href="{{url('category')}}" class="float-end btn btn-success btn-md"><i class="fa fa-edit"></i>View All Categories</a>
                                </h6> 
                            </div>
                            <div class="card-body">
                                
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                <p class="text-dark">{{session('success')}}</p>
                            </div>
                            @endif

                                <form id="basic-form" action="{{url('category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6 pb-4">
                                            <div class="form-group">
                                                <label class="form-label">Category Title:</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 pb-3">
                                            <label for="formFileMultiple" class="form-label"></label>Upload Images:</label>
                                            <input class="form-control" type="file" name="image_name" id="formFileMultiple" >
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Featured</label>
                                                <br />
                                                <label class="fancy-radio">
                                                    <input type="radio" name="featured" value="Yes" required data-parsley-errors-container="#error-radio" checked>
                                                    <span><i></i>Yes</span>
                                                </label>
                                                <label class="fancy-radio">
                                                    <input type="radio" name="featured" value="No">
                                                    <span><i></i>No</span>
                                                </label>
                                                <p id="error-radio"></p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Active</label>
                                                <br />
                                                <label class="fancy-radio">
                                                    <input type="radio" name="active" value="Yes" required data-parsley-errors-container="#error-radio" checked>
                                                    <span><i></i>Yes</span>
                                                </label>
                                                <label class="fancy-radio">
                                                    <input type="radio" name="active" value="No">
                                                    <span><i></i>No</span>
                                                </label>
                                                <p id="error-radio"></p>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

@endsection