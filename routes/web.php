<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/', [DashboardController::class, 'index'])->name('home');
route::get('/about', [DashboardController::class, 'about'])->name('about');
route::get('/products', [DashboardController::class, 'products'])->name('products');
Route::get('/uploadpayment', [DashboardController::class, 'uploadpayment'])->name('uploadpayment');
Route::post('/sendpayment', [DashboardController::class, 'sendpayment']);

route::get('/redirect',[LoginController::class,'redirect']);

route::post('/addcart/{id}', [ProductController::class, 'addcart']);
Route::get('/showcart', [ProductController::class, 'showcart']);
Route::get('/delete/{id}', [ProductController::class, 'deletecart']);
Route::post('/order', [ProductController::class, 'confirmorder']);

Route::get('/adminpanel', [AdminController::class, 'adminpanel'])->name('adminpanel');
Route::get('/uploadproduct', [AdminController::class, 'uploadproduct'])->name('uploadproduct');
Route::get('/paymentverification', [AdminController::class, 'paymentverification'])->name('paymentverification');
Route::post('/newproduct', [AdminController::class, 'newproduct']);
Route::post('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
route::post('/payacc/{id}', [AdminController::class, 'payacc']);
