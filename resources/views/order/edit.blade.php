@extends('layout')
@section('content')

        <!-- Body: Body -->
        <div class="card mb-4 mt-4">
    <div class="card-header fw-bold">
        <i class="fas fa-table me-1"></i>Update {{$data->customer_name}}'s Food Order<br><br>
        <a href="{{url('customer')}}" class="float-start btn btn-info btn-sm">View All Food Customers</a>
        <a href="{{url('order')}}" class="float-end btn btn-sm btn-success">View All Food Orders</a>
    </div>
    <div class="card-body">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('success'))
             <div class="alert alert-success">
                <p class="text-dark">{{session('success')}}</p>
             </div>
        @endif
        <form method="post" action="{{url('admin/order/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <table class="table table-bordered">
                
                <tr>
                    <th>Food</th>
                    <td>
                        <input type="text" value="{{$data->food_id}}" name="fd_id" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <input type="number" value="{{$data->quantity}}" name="quantity" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>
                        <input type="number" value="{{$data->price}}" name="price" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>
                        <input type="number" value="{{$data->total}}" name="total" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Order Date</th>
                    <td>
                        <input type="date" value="{{$data->order_date}}" name="order_date" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td>
                        <input type="text" value="{{$data->customer_name}}" name="customer_name" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Customer Contact</th>
                    <td>
                        <input type="tel" value="{{$data->customer_contact}}" name="customer_contact" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Customer Email</th>
                    <td>
                        <input type="email" value="{{$data->customer_email}}" name="customer_email" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Customer Address</th>
                    <td>
                        <input type="text" value="{{$data->customer_address}}" name="customer_address" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <input @if($data->status=='Paid') checked @endif type="radio" name="status" value="Paid" /> Paid
,                        <br />
                        <input @if($data->status=='Pending') checked @endif type="radio" name="status" value="Pending" /> Pending
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

        
@endsection