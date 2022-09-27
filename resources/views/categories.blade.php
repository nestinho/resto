@include('menu')



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Food Categories</h2>

            @foreach($food_category as $fc)
            <a href="{{url('category-foods/'.$fc->id)}}">
            <div class="box-3 float-container">
                <img src="{{asset('public/images/'.$fc->image_name)}}" width="300" height="250" alt="{{$fc->title}}" class="img-responsive img-curve">

                <h3 class="float-text text-white">{{$fc->title}}</h3>
            </div>
            </a>
            @endforeach

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    @include('footer')