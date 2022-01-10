<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;



class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function products()
    {
        return view('pages.products');
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
