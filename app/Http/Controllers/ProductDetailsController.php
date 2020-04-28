<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductDetailsController extends FrontendController
{
    
    public function __construct() {
        parent::__construct();
    }


    public function getProductDetails(Request $request) {

        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        $id = array_pop($url);
        if($id) {
            $product = Product::findOrFail($id);
            $viewData = array(
                'product' => $product
            );
            return view('product.details', $viewData);
        }
        return redirect()->to('/');
    }
}
