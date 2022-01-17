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


    public function newproduct(Request $request)
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            $data=new product;

            $image=$request->file;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->price = $request->price;
            $data->description = $request->des;
            $data->quantity = $request->quantity;
            $data->save();

            return redirect()->back()->with('message','Product Added Successfully');
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


    public function deleteproduct($id)
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            $item=product::find($id);
            $item->delete();

            return redirect()->back()->with('message','Product Deleted Successfully');
        }
    }

    public function payacc($id)
    {
        if(Auth::id())
        {

            $payment=Payment::find($id);
            $payment->payment_status='accepted';
            $order = Order::whereIn('payment_id',$payment)->update(['status'=>'delivered']);

            $payment->save();

            return redirect()->back()->with('message','Payment has been verified');
        }

        else
        {
            return redirect()->route('login');
        }
    }
}
