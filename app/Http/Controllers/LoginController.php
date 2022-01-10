<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Cart;

use App\Models\Product;

class LoginController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $a = Product::all();
            return view('pages.home')->with('products',$a);
        }
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $item=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title=$item->title;
            $cart->price=$item->price;
            $cart->quantity=$request->quantity;
            $cart->save();

            return redirect()->back();
        }

        else
        {
            return view('auth.login');
        }
    }
}
