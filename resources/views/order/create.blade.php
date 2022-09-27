@extends('layout')
@section('content')

<!-- Body: Body -->

                        <div class="card mb-3">
                            <div class="card-header py-3  bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Add New Food Order
                                    <a href="{{url('order')}}" 
                                    class="float-end btn btn-success btn-md"><i class="fa fa-edit"></i>View All Food Orders</a>
                                    </h6> 
                                </div>
                                <div class="card-body">
                                 <form id="basic-form" action="{{url('order')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            
                                            @if($errors->any())
                                                @foreach($errors->all() as $error)
                                                <div class="alert alert-danger">
                                                    <p class="text-dark">{{$error}}</p>
                                                </div>
                                                @endforeach
                                            @endif
                                            
                                            
                                            @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                <p class="text-dark">{{session('success')}}</p>
                                            </div>
                                        @endif

                                            <div class="row">
                                                <div class="col-md-6 pb-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Food Name:</label>                         
                                                        <select name="fd_id" class="form-control">
                                                            <option value="0">--- Select ---</option>
                                                            @foreach($food_order as $fd)
                                                            <option value="{{$fd->id}}">{{$fd->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 pb-4">
                                                        <div class="form-group">
                                                            <label class="form-label">Price:</label>
                                                             <select name="fp_id" class="form-control">
                                                                <option value="0">--- Select ---</option>
                                                                @foreach($food_price as $fp)
                                                                <option value="{{$fp->id}}">{{$fp->price}}</option>
                                                                @endforeach
                                                             </select>
                                                            <!--<input type="number" name="price" class="form-control" required>-->
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Quantity:</label>
                                                    <input type="number" name="quantity" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Total:</label>
                                                    <input type="number" name="total" class="form-control" required>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Order Date:</label>
                                                    <input type="date" name="order_date" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Status</label>
                                                    <br />
                                                    <label class="fancy-radio">
                                                        <input type="radio" name="status" value="Paid" required data-parsley-errors-container="#error-radio" checked>
                                                        <span><i></i>Paid</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input type="radio" name="status" value="Pending">
                                                        <span><i></i>pending</span>
                                                    </label>
                                                    <p id="error-radio"></p>
                                                </div>
                                            </div>
                                            </div>

                                        <div class="row">
                                        <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Customer Name:</label>
                                                    <input type="text" name="customer_name" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Customer Contact:</label>
                                                    <input type="tel" name="customer_contact" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Customer Email:</label>
                                                    <input type="email" name="customer_email" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6 pb-4">
                                                <div class="form-group">
                                                    <label class="form-label">Customer Address:</label>
                                                    <input type="text" name="customer_address" class="form-control" required>
                                                </div>
                                            </div>

                                        </div> 

                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                 </form>
                            </div>
                        </div>

@endsection