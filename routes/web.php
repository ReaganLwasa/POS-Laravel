<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/orders', 'App\Http\Controllers\OrderController');//orders.index
Route::resource('/products', 'App\Http\Controllers\ProductController');//products.index
Route::resource('/suppliers', 'App\Http\Controllers\SupplierController');//suppliers.index
Route::resource('/users', 'App\Http\Controllers\UserController');//users.index
Route::resource('/companies', 'App\Http\Controllers\CompanyController');//companies.index
Route::resource('/transactions', 'App\Http\Controllers\TransactionController');//transactions.index