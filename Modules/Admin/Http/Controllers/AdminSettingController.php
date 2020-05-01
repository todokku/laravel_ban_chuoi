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
            $setting->logo_url = $request->get('logo_url');
            $setting->copyright = $request->get('copyright_text');
            $setting->short_description = $request->get('short_description');
            $setting->save();
        }else{
            $newSetting = Setting::create(
                [
                    'logo_url' => $request->get('logo_url'),
                    'copyright' => $request->get('copyright_text'),
                    'short_description'=> $request->get('short_description')
                ]
            );
        }

        return redirect()->route('admin.settings.index');
    }

}
