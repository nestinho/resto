<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\Staff;
use App\Models\Department;
use App\Models\Manager;
use Cookie;

class AdminController extends Controller
{
   
    public function index()
    {
        $category=Category::all();
        $food=Food::all();
        $admin=Admin::find(1);
        $order = Order::all();
        $manager = Manager::all();
        $staff = Staff::all();
        $department = Department::all();

        return view('dashboard',[
            'food'=>$food,
            'category'=>$category,
            'admin'=>$admin,
            'order'=>$order,
            'manager' => $manager,
            'staff' => $staff,
            'department' => $department
        ]);
    }


    // Login
    function login(){
        return view('login');
    }
    // Check Login
    function check_login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $admin=Admin::where(['email'=>$request->email,'password'=>sha1($request->password)])->count();
        if($admin>0){
            $adminData=Admin::where(['email'=>$request->email,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);

            if($request->has('rememberme')){
                Cookie::queue('adminuser',$request->email,1440);
                Cookie::queue('adminpwd',$request->password,1440);
            }

            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','Invalid username/Password!!');
        }
    }
    // Logout
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
