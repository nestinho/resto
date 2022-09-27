@extends('layout')
@section('content')

                        <div class="card-header py-5">
                            <h6 class="m-0 font-weight-bold text-dark">{{$data->customer_name}}'s Food Order<br><br>
                            <a href="{{url('customer')}}" class="float-start btn btn-info btn-sm">View All Food Customers</a>
                                <a href="{{url('order')}}" class="float-end btn btn-success btn-sm">View All Food Orders</a>
                            </h6>
                        </div>

                        <div class="table-responsive">
                                    <table class="table table-hover table-bordered align-middle mb-0 text-start">
                                    <tr>
                                        <th>Food</th>
                                        <td>{{$data->foodorder->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th>                        
                                        <td>{{$data->quantity}}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>                        
                                        <td>{{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>                        
                                        <td>{{$data->total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>                        
                                        <td>{{$data->order_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Name</th>                        
                                        <td>{{$data->customer_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Contact</th>                        
                                        <td>{{$data->customer_contact}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Email</th>                        
                                        <td>{{$data->customer_email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Address</th>                        
                                        <td>{{$data->customer_address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                      </table>
                        </div>
@endsection