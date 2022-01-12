<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;

use App\Models\Cart;


class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {

            $a = Product::all();

            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

            return view('pages.home',compact('count'))->with('products', $a);

        } 

        else
        {
            $a = Product::all();
            return view('pages.home')->with('products', $a);
        }
    }

    public function products()
    {
        if (Auth::id()) 
        {

            $a = Product::all();

            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

            return view('pages.products', compact('count'))->with('products', $a);
        }

        else
        {
            $a = Product::all();
            return view('pages.products')->with('products', $a);
        }
    }

    public function about()
    {
        if (Auth::id()) {

            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

            return view('pages.about', compact('count'));
        }

        else
        {
            return view('pages.about');
        }
    }

    public function uploadpayment()
    {
        if (Auth::id()) 
        {
            $user = auth()->user();
            $count = cart::where('phone', $user->phone)->count();

            return view('pages.uploadpayment', compact('count'));
        }

        else
        {
            return view('pages.home');
        }
    }
}
