<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;



class DashboardController extends Controller
{
    public function index()
    {
        $a = Product::all();
        return view('pages.home')->with('products',$a);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function products()
    {
        $a = Product::all();
        return view('pages.products')->with('products',$a);
    }

    public function uploadproduct()
    {
        return view('pages.uploadproduct');
    }
    // public function contact()
    // {
    //     return view('pages.contact');
    // }

}
