<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
class AdminSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        return view('admin::settings.index');
    }
    public function store(Request $request){
        $setting = Setting::first();
        if($setting){
            if($request->has('logo_url')){
                $setting->logo_url = $request->get('logo_url');
            }
            if($request->has('copyright_text')){
                $setting->copyright = $request->get('copyright_text');
            }
            if($request->has('short_description')){
                $setting->short_description = $request->get('short_description');
            }
            if($request->has('facebook_url')){
                $setting->facebook_url = $request->get('facebook_url');
            }
            if($request->has('twitter_url')){
                $setting->twitter_url = $request->get('twitter_url');
            }
            if($request->has('address')){
                $setting->address = $request->get('address');
            }
            
            $setting->save();
        }else{
            $newSetting = Setting::create(
                [
                    'logo_url' => $request->get('logo_url'),
                    'copyright' => $request->get('copyright_text'),
                    'short_description'=> $request->get('short_description'),
                    'facebook_url' => $request->get('facebook_url'),
                    'twitter_url' => $request->get('twitter_url'),
                    'address' => $request->get('address'),
                ]
            );
        }

        return redirect()->back();
    }

}
