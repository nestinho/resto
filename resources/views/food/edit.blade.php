@extends('layout')
@section('content')

        <!-- Body: Body -->
        <div class="card mb-4 mt-4">
    <div class="card-header fw-bold">
        <i class="fas fa-table me-1"></i>
        Update Food
        <a href="{{url('food')}}" class="float-end btn btn-sm btn-success">View All Food</a>
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
        <form method="post" action="{{url('food/'.$data->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <table class="table table-bordered">
                
                <tr>
                    <th>Food Name</th>
                    <td>
                        <input type="text" value="{{$data->title}}" name="title" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Food Description</th>
                    <td>
                        <input type="text" value="{{$data->description}}" name="description" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Food Category</th>
                    <td>
                        <input type="text" value="{{$data->foodcategory->id}}" name="fc_id" class="form-control" />
                        
                    </td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>
                        <input type="text" value="{{$data->price}}" name="price" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <input type="file" name="image_name" class="form-control" /> <br>
                        <p>
                        <img src="{{asset('public/images/'.$data->image_name)}}" width="200" style="border-radius: 12px" />
                            <input type="hidden" name="prev_photo" value="{{$data->image_name}}" />
                        </p>
                    </td>
                </tr>
                
                <tr>
                    <th>Featured</th>
                    <td>
                        <input @if($data->featured=='Yes') checked @endif type="radio" name="featured" value="Yes" /> Yes
                        <br />
                        <input @if($data->featured=='No') checked @endif type="radio" name="featured" value="No" /> No
                    </td>
                </tr>
                <tr>
                    <th>Active</th>
                    <td>
                        <input @if($data->featured=='Yes') checked @endif type="radio" name="active" value="Yes" /> Yes
                        <br />
                        <input @if($data->featured=='No') checked @endif type="radio" name="active" value="No" /> No
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