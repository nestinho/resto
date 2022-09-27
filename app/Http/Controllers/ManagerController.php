<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use App\Models\Department;

class ManagerController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $data=Manager::orderBy('id','asc')->get();
       return view('manager.index',['data'=>$data]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $data=Department::orderBy('id','asc')->get();
       return view('manager.create',['departments'=>$data]);
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
           'full_name'=>'required',
           'photo'=>'required|image|mimes:jpg,png,gif',
           'address'=>'required',
           'mobile'=>'required',
           'status'=>'required',
       ]);

       $photo=$request->file('photo');
       $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
       $dest=public_path('/images');
       $photo->move($dest,$renamePhoto);

       $data=new Manager();
       $data->department_id=$request->depart;
       $data->full_name=$request->full_name;
       $data->photo=$renamePhoto;
       $data->address=$request->address;
       $data->mobile=$request->mobile;
       $data->status=$request->status;
       $data->save();

       return redirect('manager/create')->with('msg','Data has been submitted');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $data=Manager::find($id);
       return view('manager.show',['data'=>$data]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $data=Manager::find($id);
       $departs=Department::orderBy('id','desc')->get();
       return view('manager.edit',['departs'=>$departs,'data'=>$data]);

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
           'full_name'=>'required',
           'address'=>'required',
           'mobile'=>'required',
           'status'=>'required',
       ]);


       if($request->hasFile('photo')){
           $photo=$request->file('photo');
           $renamePhoto=time().'.'.$photo->getClientOriginalExtension();
           $dest=public_path('/images');
           $photo->move($dest,$renamePhoto);
       }else{
           $renamePhoto=$request->prev_photo;
       }

       $data=Manager::find($id);
       $data->department_id=$request->depart;
       $data->full_name=$request->full_name;
       $data->photo=$renamePhoto;
       $data->address=$request->address;
       $data->mobile=$request->mobile;
       $data->status=$request->status;
       $data->save();

       return redirect('manager/'.$id.'/edit')->with('msg','Data has been submitted');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      Manager::where('id',$id)->delete();
       return redirect('manager');
   }
}
