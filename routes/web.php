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

// HomeController diganti LoginController TOLONG DIBACA
route::get('/redirect',[LoginController::class,'redirect']);

Route::post('/newproduct', [ProductController::class, 'newproduct']);
route::post('/addcart/{id}', [ProductController::class, 'addcart']);
Route::get('/showcart', [ProductController::class, 'showcart']);
Route::post('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
Route::get('/delete/{id}', [ProductController::class, 'deletecart']);
Route::post('/order', [ProductController::class, 'confirmorder']);
// Route::get('/delete/{id}', 'ProductController@deletecart')->name('deletecart');
// Route::post('/order', 'ProductController@confirmorder')->name('confirmorder');

Route::get('/adminpanel', [AdminController::class, 'adminpanel'])->name('adminpanel');
Route::get('/uploadproduct', [AdminController::class, 'uploadproduct'])->name('uploadproduct');
Route::get('/paymentverification', [AdminController::class, 'paymentverification'])->name('paymentverification');
route::post('/payacc/{id}', [AdminController::class, 'payacc']);
// Route::get('/', 'DashboardController@index')->name('home');
// Route::get('/about', 'DashboardController@about')->name('about');
// Route::get('/products', 'DashboardController@products')->name('products');
// Route::post('/newproduct', 'ProductController@newproduct')->name('newproduct');
// Route::get('/showcart', 'ProductController@showcart')->name('showcart');
// Route::get('/adminpanel', 'AdminController@home')->name('adminpanel');
// Route::get('/uploadproduct', 'AdminController@uploadproduct')->name('uploadproduct');
// Route::get('/paymentverification', 'AdminController@paymentverification')->name('paymentverification');
