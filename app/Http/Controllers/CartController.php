<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("/client/pages/cart");
    }

    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Kiểm tra xem sản phẩm có tồn tại không
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['error' => 'Sản phẩm không tồn tại'], 404);
        }

        // Thêm sản phẩm vào giỏ hàng
        $cart = $this->getCartFromSession(); // Hàm này sẽ được triển khai để lấy giỏ hàng từ session
        $cart->addItem($product, $quantity); // Phương thức này sẽ được triển khai trong mô hình giỏ hàng của bạn

        // Lưu lại giỏ hàng vào session
        $this->saveCartToSession($cart); // Hàm này sẽ được triển khai để lưu giỏ hàng vào session

        // Phản hồi với thông tin chi tiết sản phẩm đã được thêm vào giỏ hàng
        return response()->json([
            'message' => 'Sản phẩm đã được thêm vào giỏ hàng',
            'item' => [
                'id' => $product->id,
                'name' => $product->name,
                'quantity' => $quantity,
                // Thêm các thuộc tính sản phẩm khác tại đây (vd: giá, ảnh, mô tả, ...)
            ],
        ]);
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
        //
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
