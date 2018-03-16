<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedbacks;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedbacks::all();
        return view('admin')->withFeedbacks($feedbacks);
    }
}
