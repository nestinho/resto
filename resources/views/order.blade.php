@include('menu')

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="{{url('order')}}" method="POST" class="order">
                @csrf
                <fieldset>
                    <legend>Make An Order</legend>

                     
                    @if(Session::has('success'))   
                         <p class="text-dark" style="color:green">{{session('success')}}</p><br>
                     @endif

                    <div class="food-menu-img">
                        <img src="{{asset('public')}}/images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                            <!--<h3 name="title" value="">Food Title</h3>-->
                            <!--<p class="food-price" name="price" value="">$2.3</p>-->

                        <div class="order-label food-price">Food Name</div>
                        <!--<input type="text" name="order_id" class="input-responsive" value="" required>-->
                        <select name="order_id" class="form-control food-price input-responsive">
                            <option value="0">--- Select Food ---</option>
                                  @foreach($customer_order as $order)
                                      <option value="{{$order->id}}">{{$order->title}}</option>
                                 @endforeach
                        </select>

                        <div class="order-label">Quantity</div>
                        <input type="number" id="quantity" name="quantity" class="input-responsive" onChange="cal('quantity')" value="1" required>
                        
                        <div class="order-label food-price">Price</div>
                        <!--<input type="number" id="price" name="price" class="input-responsive" onChange="cal('price')" value="" required>-->
                        <select name="cost_id" class="form-control food-price input-responsive">
                            <option value="0">--- Add Food Price ---</option>
                                  @foreach($customer_price as $cost)
                                      <option value="{{$cost->id}}">{{$cost->price}}</option>
                                 @endforeach
                        </select>
   
                       <?php 
                            $price = 3;
                            $quantity = 4;
                            $total = $price * $quantity; 
                        ?>

                        <div class="order-label food-price">Total</div>
                        <input type="number" id="total" name="total" class="input-responsive" onclick="alert(')" value="" required>
                       
                        <div class="order-label">Order Date:</div>
                        <input type="date" name="order_date" class="input-responsive" required>
                        
                        
                    </div>

                    <script>
                        function cal(val){
                            price = document.getElementById('price').value;
                            quantity = document.getElementById('quantity').value;

                            document.getElementById('total').innerHTML = price * quantity;
                            
                        }
                    </script>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="customer_name" placeholder="E.g. John Doe" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="customer_contact" placeholder="E.g. 0715xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="customer_email" placeholder="E.g. name@example.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="customer_address" rows="10" placeholder="E.g. Buza Kanisani, Temeke, Dar es salaam." class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm_Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    @include('footer')