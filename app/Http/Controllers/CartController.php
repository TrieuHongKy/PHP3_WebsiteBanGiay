<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_id = $request->user()->id;
        $cartItems = Cart::where('user_id',$user_id)->get();
        return view('client/pages/cart',compact('cartItems'));
    }

    public function addCart(Request $request)
    {

//        $cart = new Cart();
//        $cart->product_id = $request->input('product_id');
//        $cart->product_name = $request->input('product_name');
//        $cart->price = $request->input('price');
//        $cart->image = $request->input('image');
//        $cart->quantity = $request->input('quantity');
//        $cart->save();
//
//        // Thực hiện các hành động khác (redirect, thông báo thành công, vv.) nếu cần thiết
//
//        return redirect('/cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    $user_id = Auth::user()->id;
    $quantity = $request->quantity;
    $product_id = $request->product_id;
    $total = $request->price * $quantity;
    Cart::create([
       'product_id' => $product_id,
       'quantity' => $quantity,
       'total' => $total,
       'user_id' => $user_id
    ]);

    return redirect('/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
//        $user_id = $request->user()->id;
//        $cartItems = Cart::where('user_id',$user_id)->get();
//        return view('client/pages/cart',compact('cartItems'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
