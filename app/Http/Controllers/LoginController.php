<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';

    public function getLogin() {



    	if (Auth::guard('web')->check()) {

    		return redirect()->route('dashboard');
    	}
    	return view('login');
    }

    public function postLogin(Request $request) {

    	$auth = Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password]);	

    	if ($auth){ 

    		return redirect()->route('/home');
    	}

    	return redirect()->route('/login');
    }

    public function getLogout() {

    	Auth::guard('web')->logout();
    	return redirect()->route('/');
    }
}
