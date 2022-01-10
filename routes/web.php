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
// Route::get('/', 'DashboardController@index')->name('home');
// route::get('/', [DashboardController::class, 'index']);
Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/products', 'DashboardController@products')->name('products');
Route::get('/uploadproduct', 'DashboardController@uploadproduct')->name('uploadproduct');
Route::post('/newproduct', 'ProductController@newproduct')->name('newproduct');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// HomeController diganti LoginController
route::get('/redirect',[LoginController::class,'redirect']);
