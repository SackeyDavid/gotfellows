<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

    public function showLoginForm()
    {
    	return view('admin-login');
    }

    public function login(Request $request){

    	//validate the form
    	$this->validate($request, [
    		'name' => 'required|name',
    		'password' => 'required|min:6'
    		]);

    	//attempt to log user in
    	if(Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password], $request->remember))
    	{

    		return redirect()->intended(route('admin.dashboard'));
    	}
    	

    	return redirect()->back()->withInput($request>only('name','password'));
    }

    public function index() {
    	return view('layouts.master');
    }
}
 