@include('menu')

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on <a href="#" class="text-white">"Category"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($food_type as $foodtype)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('public/images/'.$foodtype->image_name)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{$foodtype->title}}</h4>
                    <p class="food-price">TZS {{$foodtype->price}}</p>
                    <p class="food-detail">
                        {{$foodtype->description}}
                    </p>
                    <br>

                    <a href="{{url('order')}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            @endforeach

            <div class="clearfix"></div>

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

   @include('footer')