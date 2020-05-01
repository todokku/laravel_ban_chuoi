<?php

namespace Modules\Admin\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getLoginAdmin()
    {
        return view('admin::auth.login');
    }


    public function postLoginAdmin(Request $request)
    {
       
        $data = $request->only('email', 'password');
		if (Auth::guard('admins')->attempt($data)) {
			return redirect()->route('admin.dashboard');
		}
		
		return redirect()->back();
    }

    public function getlogoutAdmin()
	{
		Auth::guard('admins')->logout();
		
		return redirect()->route('admin.login');
	}
    
}
