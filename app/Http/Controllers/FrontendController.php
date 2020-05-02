<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Setting;
// use App\Models\Post;
class FrontendController extends Controller
{
    
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories', $categories);
        $setting = Setting::first();
        View::share('setting', $setting);
    }
    // public function show() {
    //     $categories = Category::all();
    //     $newsPosts = Post::orderBy('id','DESC')->limit(3)->get();
    //     $viewData = array(
    //         'categories' => $categories,
    //         'newsPosts' => $newsPosts
    //     );
    //     $showCategories = View::share($viewData);
    //     return view('layouts.pos', compact('showCategories'));
    // }

   
        // $viewData = array(
        //     'newsPosts' => $newsPosts
        // );
        // // dd($viewData);
        // return view('layouts.pos', $viewData);
}
