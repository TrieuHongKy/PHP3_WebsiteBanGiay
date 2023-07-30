<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipt = Receipt::all();
        return view ('client/pages/receipt',compact('receipt'));
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
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
//        $cart_id = Cart::where('user_id',$user_id)->get();
        $cart_id = $request->cart_id;
        $product_id = $request->product_id;
        $date = $request->date;
        $payment_method = $request->payment_method;
        $address = $request->address;
        $total = $request->total;
        $quantity = '1';

//        foreach($cart_id->product as $c){
            Receipt::create([
                'date'           => $date,
                'payment_method' => $payment_method,
                'total'          => $total,
                'address'        => $address,
                'user_id'        => $user_id,
                'cart_id'        => $cart_id,
                'product_id'     => $product_id,
                'quantity'       => $quantity
            ]);
//        }

        return redirect('/receipt');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
