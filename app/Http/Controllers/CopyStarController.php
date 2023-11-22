<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyStarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_id = $request->id;
        $product_cart = Cart::all()->where('product_id', $product_id)->where("user_id", Auth::user()->id)->first();
        if ($product_cart == null  || $product_cart->count() == "null") {
            $add = Cart::create([
                "user_id" => Auth::user()->id,
                "product_id" => $product_id,
                "quantity" => 1
            ]);
        }
        else{
            $quantity = $product_cart->quantity + 1;
            $add = $product_cart->update(["quantity" => $quantity]);
        }
    }
    public function addOrder(Request $request)
    {
        $cart_id = $request->id;
        $user = Auth::user();
        $order = Order::query()->where("user_id", $user->id)->where("cart_id", $cart_id)->first();
        if ($order == null) {
            $order = Order::create([
                "user_id" => $user->id,
                "cart_id" => $cart_id,
                "quantity" => 1
            ]);
        }
        else{
            $quantity = $order->quantity + 1;
            $order->update(["quantity" => $quantity]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return redirect()->route('product', $product->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $product_id = $request->id;
        $user = Auth::user();
        $cart = Cart::query()->where("id", $product_id)->first();
        if ($cart->quantity == 1) {
            $cart->delete();
        }
        else{
            $quantity = $cart->quantity - 1;
            $upd = Cart::query()->where("id", $product_id)->update(["quantity" => $quantity]);
        }
    }
    public function destroyOrder(string $id, Request $request)
    {
        if ($id == null) {
            $id = $request->order_id;
        }
        $order = Order::findOrFail($id);
        $order->delete();
    }
}
