<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends FrontendController
{
    public function index() {
        return view('product.index');
    }
}
