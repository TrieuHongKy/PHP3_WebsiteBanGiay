<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $post = Post::paginate(3);
        $post_cate = Category::all();
        $featuredProducts = (new ProductController())->getFeaturedProducts();
        return view("/client/pages/post",['post_cate'=>$post_cate ,'featuredProducts' => $featuredProducts,'post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view("/client/pages/post-detail");
    }

    public function getPost()
    {
        $getPost = Post::orderBy('date', 'desc')->take(3)->get();

        return $getPost;
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
    public function show($slug)
    {
        $post = Post::query()->where('slug', $slug)->get();
        $data = ['slug'=>$slug,'post'=>$post];
//        $post_cate = Category::all();
        $featuredProducts = (new ProductController())->getFeaturedProducts();
        return view("/client/pages/post-detail",$data,['featuredProducts' => $featuredProducts]);
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
