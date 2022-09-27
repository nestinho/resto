<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::all();
        return view('category.index',['data'=>$data]);
        //'data' => DB::table('categories')->simplePaginate(5) -->pagination
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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

        ]);

       $photo=$request->file('image_name');
       $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
       $dest=public_path('/images');
       $photo->move($dest,$renamePhoto);

      
        $data=new Category;
        $data->title=$request->title;
        $data->featured=$request->featured;
        $data->active=$request->active;
        $data->image_name=$renamePhoto;
        $data->save();

        return redirect('category/create')->with('success','New Food Category has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Category::find($id);
        return view('category.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Category::find($id);
        return view('category.edit',['data'=>$data]);
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

        ]);

        if($request->hasFile('image_name')){
            $photo=$request->file('image_name');
            $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
            $dest=public_path('/images');
            $photo->move($dest,$renamePhoto);
        }else{
            $renamePhoto=$request->prev_photo;
        }

     
        $data=Category::find($id);
        $data->title=$request->title;
        $data->image_name=$renamePhoto;
        $data->featured=$request->featured;
        $data->active=$request->active;
        $data->save();

        return redirect('category/'.$id.'/edit')->with('success','Food Category has been updated.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect('category');
    }
}
