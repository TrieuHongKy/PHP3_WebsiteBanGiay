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
        public function show($slug)
    {
        $product = DB::table('products')->where('slug', $slug)->get();
        $data = ['slug'=>$slug,'product'=>$product];
        return view("/client/pages/product-detail",$data);
    }

    public function showProductByCate($slug)
    {
        $cate = ProductCategory::all();
        $category = ProductCategory::where('slug',$slug)->first();
        $product = Product::where('category_id', $category->id)->paginate(6);
//        $data = ['Category'=>$Category,'slug'=>$slug,'productCategory'=>$productCategory];
        return view("client/pages/product-category",compact('cate','product'));
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
