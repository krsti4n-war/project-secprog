<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function adminpanel()
    {
        if(Auth::id())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                $a = Product::all();
                return view('admin.home')->with('products', $a);;
            }

            else
            {
                return redirect()->route('home');
            }
        }

        else
        {
            return redirect()->route('home');
        }
    }


    public function uploadproduct()
    {
        if(Auth::id())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                return view('admin.uploadproduct');
            }

            else
            {
                return redirect()->route('home');
            }
        }

        else
        {
            return redirect()->route('home');
        }
    }

    public function paymentverification()
    {
        if(Auth::id())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                return view('admin.paymentverification');
            }

            else
            {
                return redirect()->route('home');
            }
        }

        else
        {
            return redirect()->route('home');
        }
    }
}
