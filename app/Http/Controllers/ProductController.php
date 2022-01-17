<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class ProductController extends Controller
{
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

            return redirect()->back()->with('message','Product Added Successfully');
        }

        else
        {
            return redirect()->route('login');
        }
    }

    public function showcart()
    {
        if (Auth::id())
        {
            $user = auth()->user();
            $cart=cart::where('phone',$user->phone)->get();
            $count = cart::where('phone', $user->phone)->count();

            return view('pages.showcart', compact('count','cart'));
        }

        else
        {
            return redirect()->route('login');
        }
    }


    public function deletecart($id)
    {
        $data=cart::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Removed Successfully');;
    }

    public function confirmorder(Request $request)
    {
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
        $payid = strval(rand(100000,999999));

        foreach($request->productname as $key=>$productname)
        {
            $order=new order;

            $order->product_name=$request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->status='not delivered';
            $order->payment_id = $payid;

            $order->save();
        }

        DB::table('carts')->where('phone',$phone)->delete();

        return redirect()->back()->with('message', 'Order Confirmed, Payment id:'.$payid);;
    }

}
