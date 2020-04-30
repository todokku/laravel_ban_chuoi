<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class CategoryController extends FrontendController
{
    public function getListProduct(Request $request) {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if ($id = array_pop($url)) {
            $products = Product::where([
                'product_category_id' => $id,
                'product_active' => Product::STATUS_PUBLIC,
            ])->orderBy('id', 'DESC')->paginate(10);
            $cateProduct = Category::find($id);
            $viewData = array(
                'products' => $products,
                'cateProduct' => $cateProduct,
            );

            return view('product.index', $viewData);
        }
    }
}
