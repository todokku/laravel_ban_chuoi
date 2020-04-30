<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestBanner;
use App\Models\Banner;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
     public function index()
     {
        $banner = Banner::paginate(5);
        $viewData = [
            'banner' => $banner
        ];
        return view('admin::banner.index', $viewData);
     }
 
     /**
      * Show the form for creating a new resource.
      * @return Response
      */
     public function create()
     {
        return view('admin::banner.create');
     }
 
     /**
      * Store a newly created resource in storage.
      * @param  Request $request
      * @return Response
      */
     public function store(RequestBanner $requestBanner)
     {
         
        $this->insertOrUpdate($requestBanner);
        return redirect()->back()->with('message', 'Thêm banner thành công');
         
     }
 
     /**
      * Show the specified resource.
      * @return Response
      */
     public function show()
     {
        return view('admin::show');
     }
 
     /**
      * Show the form for editing the specified resource.
      * @return Response
      */
     public function edit($id)
     {
        $banner = Banner::find($id);
        return view('admin::banner.update', compact('banner'));
     }
 
     public function update(RequestBanner $requestBanner, $id)
     {
        $this->insertOrUpdate($requestBanner, $id);
        return redirect()->back()->with('message', 'Cập nhật banner thành công');
     }
 
     public function delete($id)
     {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->back()->with('message', 'Xóa banner thành công');
     }
 
     public function insertOrUpdate($requestBanner, $id = '')
     {
        $code = 1;
        try {
            $banner = new Banner();
            if($id) {
            $banner = Banner::find($id);
            }
            $banner->banner_name = $requestBanner->banner_name;
            if ($requestBanner->hasFile('banner_thumbnail')) {
                $file = upload_image('banner_thumbnail');
                if (isset($file['name'])) {
                    $banner->banner_thumbnail = $file['name'];
                }
            }
            $banner->save();
        } catch (\Exception $exception) {
            $code = 0;
            Log::error('[Errors function insertOrUpdate Table Banner]'.$exception->getMessenge());
        }
        
        return $code;
     }
}