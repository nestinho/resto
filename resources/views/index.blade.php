@include('menu')

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Food Categories</h2>
             
            @foreach($food_category as $fc)
            <a href="{{url('categories/'.$fc->id)}}">
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

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($food_menu as $food)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('public/images/'.$food->image_name)}}" height="80" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{$food->title}}</h4>
                    <p class="food-price">TZS {{$food->price}}</p>
                    <p class="food-detail">
                        {{$food->description}}
                    </p>
                    <br>

                    <a href="{{url('order')}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            @endforeach

            <div class="clearfix"></div>
        </div>

        <p class="text-center">
            <a href="{{url('foods')}}">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

   @include('footer')