<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('register', function () {
    return view('Register');
});

Route::post('/login',[\App\Http\Controllers\UserController::class,'Login']);
Route::post('/register',[\App\Http\Controllers\UserController::class,'Register']);
Route::get('/',[\App\Http\Controllers\ProductController::class,'index']);
Route::get('detail/{id}',[\App\Http\Controllers\ProductController::class,'Details']);
Route::get('search',[\App\Http\Controllers\ProductController::class,'Search']);
Route::post('add_to_cart',[\App\Http\Controllers\ProductController::class,'AddToCart']);

Route::get('cartlist',[\App\Http\Controllers\ProductController::class,'CartList']);
Route::get('removecart/{id}',[\App\Http\Controllers\ProductController::class,'CartDelete']);
Route::get('ordernow',[\App\Http\Controllers\ProductController::class,'OrderNow']);
Route::post('orderplace',[\App\Http\Controllers\ProductController::class,'OrderPlace']);
Route::get('myorder',[\App\Http\Controllers\ProductController::class,'MyOrder']);

Route::get('cancelorder/{id}',[\App\Http\Controllers\ProductController::class,'CancelOrder']);
Route::get('detailformyorder/{id}',[\App\Http\Controllers\ProductController::class,'DetailsForMyOrder']);


Route::get('addproduct', function () {
    return view('AddNewProduct');
});
Route::post('/addproduct',[\App\Http\Controllers\ProductController::class,'AddProduct']);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
