<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;
use App\Models\Category;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Food::all();
        return view('food.index',['data'=>$data]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $food_category=Category::all();
        return view('food.create',['food_category'=>$food_category]);

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
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',

        ]);

        $photo=$request->file('image_name');
        $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
        $dest=public_path('/images');
        $photo->move($dest,$renamePhoto);

     
        $data=new Food;
        $data->title=$request->title;
        $data->category_id=$request->fc_id;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->image_name=$renamePhoto;
        $data->featured=$request->featured;
        $data->active=$request->active;
        $data->save();

        return redirect('food/create')->with('success','New Food has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Food::find($id);
        return view('food.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food_category=Category::all();
        $data=Food::find($id);
        return view('food.edit',['data'=>$data]);
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
            'title'=>'required',
            'price'=>'required',

        ]);

        if($request->hasFile('image_name')){
            $photo=$request->file('image_name');
            $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
            $dest=public_path('/images');
            $photo->move($dest,$renamePhoto);
        }else{
            $renamePhoto=$request->prev_photo;
        }

        $food_category=Category::find($id);
        $data=Food::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->category_id=$request->fc_id;
        $data->image_name=$renamePhoto;                     
        $data->featured=$request->featured;
        $data->active=$request->active;
        $data->save();

        return redirect('food/'.$id.'/edit')->with('success','Food has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::where('id',$id)->delete();
        return redirect('food');
    }
}
