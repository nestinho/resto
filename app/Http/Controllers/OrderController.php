<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Food;
use App\Models\Category;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Order::all();
        return view('order.index',['data'=>$data]);;
    }

    public function customer_index()
    {
        $data=Order::all();
        return view('customer.index',['data'=>$data]);;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $food_category=Category::all();
        $food_order=Food::all();
        $food_price=Food::all();
        return view('order.create',[
            'food_category'=>$food_category, 
            'food_order'=>$food_order,
            'food_price'=>$food_price
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'price'=>'required',
            'quantity'=>'required',
            'customer_name'=>'required',
            'customer_contact'=>'required',
            'customer_email'=>'required',
            'customer_address'=>'required',

        ]);

     
        $data=new Order;
       // $data->price=$request->price;
        $data->price=$request->fp;
        $data->quantity=$request->quantity;
        $data->total=$request->total;
        $data->order_date=$request->order_date;
        $data->status=$request->status;
        $data->customer_name=$request->customer_name;
        $data->customer_contact=$request->customer_contact;
        $data->customer_email=$request->customer_email;
        $data->customer_address=$request->customer_address;
        $data->food_id=$request->fd_id; //new line
        $data->save();

        return redirect('order/create')->with('success','New Food Order has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Order::find($id);
        return view('order.show',['data'=>$data]);
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Order::find($id);
        $data=Food::find($id);
        return view('order.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           
            'price'=>'required',
            'quantity'=>'required',
            'customer_name'=>'required',
            'customer_contact'=>'required',
            'customer_email'=>'required',
            'customer_address'=>'required',

        ]);

     
        $data=Order::find($id);
       // $data->food=$request->food; //inatakiwa kutoka
        $data->food_id=$request->fd_id; //new line
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->total=$request->total;
        

        //function getTotalPrice(){
//
        //    $total = $request->price * $request->quantity;
        //    return $total;
        //}
        //$data->total=$total;

        $data->order_date=$request->order_date;
        $data->status=$request->status;
        $data->customer_name=$request->customer_name;
        $data->customer_contact=$request->customer_contact;
        $data->customer_email=$request->customer_email;
        $data->customer_address=$request->customer_address;
        $data->save();

        return redirect('order/'.$id.'/edit')->with('success','Food Order has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::where('id',$id)->delete();
        return redirect('admin/order');
    }

}
