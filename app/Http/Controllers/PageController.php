<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;

class PageController extends Controller
{
    //These functions return views of front end(client's view)
    //Where the client can place its order
    
    public function home()
    {
        //Eloquent model query builder using model class
        //This returns all food categories from database and bring them to front end of user
        //$food_category=Category::all();

        //custom query builder using DB class.
        //this returns only food categories from database where active and featured are yes
        $food_category=DB::table('Categories')
        ->where([
            ['active','=','Yes'],
            ['featured','=','Yes']
        ])
        ->limit(6)
        ->get();

        
        $food_menu=Food::all();
        return view('index',[
            'food_category'=>$food_category,
            'food_menu'=>$food_menu
        ]);
    }

    public function food()
    {
        $food_menu=Food::all();
        return view('foods',['food_menu'=>$food_menu]);
       
    }

    public function order()
    {
        $customer_order=Food::all();
        $customer_price=Food::all();
        return view('order',['customer_order'=>$customer_order,'customer_price'=>$customer_price]);

    }

    public function saveorder(Request $request){

        $request->validate([
            'price'=>'required',
            'quantity'=>'required',
            'customer_name'=>'required',
            'customer_contact'=>'required',
            'customer_email'=>'required',
            'customer_address'=>'required',

        ]);

        $data=New Order;
        $data->food_id=$request->order_id;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->total=$request->total;
        $data->order_date=$request->order_date;
        $data->status='pending';
        $data->customer_name=$request->customer_name;
        $data->customer_contact=$request->customer_contact;
        $data->customer_email=$request->customer_email;
        $data->customer_address=$request->customer_address;
         //new line
        $data->save();

        return redirect('order')->with('success','Your Food Order has been added. Please Confirm Your Payments.');
    }

    public function category()
    {
        $food_category=Category::all();
        return view('categories',['food_category'=>$food_category]);
    }

    public function category_foods()
    {

        $food_type=DB::table('food')
        ->where(
            'category_id','=','3' //i need to get the id from database.
         )  
        ->get();

        return view('category-foods',['food_type'=>$food_type]);
    }

    

}
