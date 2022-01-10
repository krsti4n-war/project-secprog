<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function newproduct(Request $request)
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
            return redirect()->route('login');
        }
    }
}
