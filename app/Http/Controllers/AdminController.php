<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminController extends Controller
{
    //
    public function home()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            return redirect()->route('home');
        }
    }


    public function uploadproduct()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('pages.uploadproduct');
        }

        else
        {
            return redirect()->route('home');
        }
    }
}
