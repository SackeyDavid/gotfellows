<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
       public function __construct(){
        $this->middleware('guest', ['except' => 'logout']);
   }
public function index(){
        return view('home');
    }
}
