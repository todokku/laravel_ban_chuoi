<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class BaseController extends Controller
{
    public function __constructor(){
        $setting = Setting::first();
        View::share('setting', $setting);
    }
}
