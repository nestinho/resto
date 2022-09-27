@extends('layout')
@section('content')
<!-- Body: Body -->


<div class="card mb-3">
                            <div class="card-header py-3  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">View All Food Customers 
                                  <a href="{{url('orders/create')}}" class="float-end btn btn-success btn-md"><i class="fa fa-edit"></i>Add New Food Order</a></h6> 
                                
                            </div>
                            <div class="card-body  variants-custome-color">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle mb-0 text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
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
                                                <td>{{ $i++ }}</td>
                                                <td scope="row">{{$d->customer_name}}</td>
                                                <td>{{$d->customer_contact}}</td>
                                                <td>{{$d->customer_email}}</td>
                                                <td>{{$d->customer_address}}</td>
                                                <td>
                                                  <a href="{{url('orders/'.$d->id)}}" 
                                                    class="btn btn-info btn-md"><i class="fa fa-eye"></i>Show customer's Order
                                                  </a>
                                                </td>
                                            </tr>  
                                            @endforeach
                                          @endif
                                      
                                        </tbody>
                                        <tfooter>
                                          <tr>
                                            <th scope="col">#.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </tfooter>
                                      </table>
                                </div>
                            </div>
                        </div>

</div>
@endsection