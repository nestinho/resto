<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ManagerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//============= Front End Routes (Clients) =======//
//Home Route
Route::get('/',[PageController::class,'home']);

//Category Route
Route::get('/categories',[PageController::class,'category']);
Route::get('/categories/{id}',[PageController::class,'category']);

//Category-Foods Route
Route::get('/category-foods',[PageController::class,'category_foods']);
Route::get('/category-foods/{id}',[PageController::class,'category_foods']);

//Food Route
Route::get('/foods',[PageController::class,'food']);

//Order Route
Route::get('/order',[PageController::class,'order']);
Route::post('/order',[PageController::class,'saveorder']);

//========== Back End Routes (Admin) =====//

//Admin Dashboard
Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin',[AdminController::class,'index']);
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout',[AdminController::class,'logout']);



//Category Routes
Route::get('category/{id}/delete',[CategoryController::class,'destroy']);
Route::resource('category',CategoryController::class);

//Food Routes
Route::get('food/{id}/delete',[FoodController::class,'destroy']);
Route::resource('food',FoodController::class);

//Customer Routes
Route::get('customer/{id}/delete',[FoodController::class,'destroy']);
Route::get('customer',[OrderController::class,'customer_index']);

//Order Routes
Route::get('orders/{id}/delete',[OrderController::class,'destroy']);
Route::resource('orders',OrderController::class);

//Department Routes
Route::get('department/{id}/delete',[DepartmentController::class,'destroy']);
Route::resource('department',DepartmentController::class);

// Manager Resource
Route::get('manager/{id}/delete',[ManagerController::class,'destroy']);
Route::resource('manager',ManagerController::class);

//Staff Routes
Route::get('staff/{id}/delete',[StaffController::class,'destroy']);
Route::resource('staff',StaffController::class);




