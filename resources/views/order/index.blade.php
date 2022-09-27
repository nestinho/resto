@extends('layout')
@section('content')
<!-- Body: Body -->


<div class="card mb-3">
                            <div class="card-header py-3  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">View All Food Orders 
                                  <a href="{{url('orders/create')}}" class="float-end btn btn-success btn-md"><i class="fa fa-edit"></i>Add New Food Order</a></h6> 
                                
                            </div>
                            <div class="card-body  variants-custome-color">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0 text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Food</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price@</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">status</th>
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
                                                <td scope="row">{{$d->foodorder->title}}</td>
                                                <td>{{$d->quantity}}</td> 
                                                <td>{{$d->foodorder->price}}</td> 
                                                <td>{{$d->total}}</td>
                                                <td>{{$d->order_date}}</td> 
                                                <td>{{$d->customer_name}}</td> 
                                                <td>{{$d->customer_contact}}</td>                                          
                                                <td>{{$d->status}}</td>
                                                
                                                <td>
                                                  <a href="{{url('orders/'.$d->id)}}" class="btn btn-info btn-md"><i class="fa fa-eye"></i>Show</a>
                                                  <a href="{{url('orders/'.$d->id.'/edit')}}" class="btn btn-primary btn-md">Update</a>
                                                  <a onclick="return confirm('Are you sure to delete this data?')" href="{{url('orders/'.$d->id.'/delete')}}" class="btn btn-danger btn-md">Delete</a>
                                                </td>
                                            </tr>  
                                            @endforeach
                                          @endif
                                          
                                      
                                        </tbody>
                                        <tfooter>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Food</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price@</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </tfooter>
                                      </table>
                                </div>
                            </div>
                        </div>

</div>
@endsection