<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Order;


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
                return view('admin.home')->with('products', $a);
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
                $a = Payment::select()->where('payment_status','pending')->get();

                return view('admin.paymentverification')->with('products', $a);
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

    public function payacc(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $payment=Payment::find($id);

            $payment->payment_status='accepted';
            
            $order = Order::whereIn('payment_id',$payment)->update(['status'=>'delivered']);

            // $query = Sess::select('order')
            echo $order;
            // if ($order->status == "not delivered"){
            //     $order->status = "delivered";
            // }
            $payment->save();
            // $order->save();

             
            

            return redirect()->back()->with('message','Payment has been verified');
        }

        else
        {
            return redirect()->route('login');
        }
    }
}
