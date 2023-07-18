<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(6);
        $product_cate = ProductCategory::all();
//        $product = DB::table('products')->where('id', $id)->get();
//        $data = ['id'=>$id, 'product'=>$product];
        return view("/client/pages/product",compact('product','product_cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getFeaturedProducts()
    {
        $featuredProducts = Product::orderBy('view', 'desc')->take(4)->get();

        return $featuredProducts;
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
//    public function show($id = 0)
        public function show($id=0)
    {
        $product = DB::table('products')->where('id', $id)->get();
        $data = ['id'=>$id,'product'=>$product];
//        $prod = DB::table('products')->where('id',$id)->first();
//        $data = ['id'=>$id,'prod'=>$prod];
//        return view("/client/pages/product-detail",$data);

        return view("/client/pages/product-detail",$data);
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
