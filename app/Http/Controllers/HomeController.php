<?php

namespace App\Http\Controllers;

use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $widgets = Widget::all();
        $featuredProducts = (new ProductController())->getFeaturedProducts();
        $getPost = (new PostController())->getPost();
        return view("/client/pages/home",['widgets'=>$widgets,'featuredProducts' => $featuredProducts,'getPost'=>$getPost]);
    }

//    public function checkUserType(){
//        if (!Auth::user()){
//            return redirect()->route('login');
//        }
//        if (Auth::user()->userType === 'USER'){
//            return redirect()->route('/profile');
//        } if (Auth::user()->userType === 'ADM'){
//            return redirect()->route('/admin');
//        }
//    }

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
