<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\User;
use App\Comments;
use Redirect;


class PostsController extends Controller
{
    //
    public function index(){
    	$posts = Posts::where('active',1)->orderBy('created_at')->paginate(5);

    	return view('home');
    }
}
