<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\Post;
use App\Models\Banner;
class HomeController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }

    public function index() {
        $productHot = Product::where([
            'product_hot' => Product::HOT_ON,
            'product_active' => Product::STATUS_PUBLIC,
        ])->limit(5)->get();
        //dd($productHot);
        $newsPosts = Post::orderBy('id','DESC')->limit(3)->get();
        $banners = Banner::all();
        $viewData = array(
            'productHot' => $productHot,
            'newsPosts' => $newsPosts,
            'banners' => $banners,
            
        );
        return view('home.index', $viewData);
    }

}
