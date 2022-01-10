<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

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

Route::get('/', 'DashboardController@index')->name('home');
// route::get('/', [DashboardController::class, 'index']);
Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/products', 'DashboardController@products')->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// HomeController diganti LoginController TOLONG DIBACA
route::get('/redirect',[LoginController::class,'redirect']);

Route::post('/newproduct', 'ProductController@newproduct')->name('newproduct');
route::post('/addcart/{id}', [ProductController::class, 'addcart']);

Route::get('/adminpanel', 'AdminController@home')->name('adminpanel');
Route::get('/uploadproduct', 'AdminController@uploadproduct')->name('uploadproduct');
