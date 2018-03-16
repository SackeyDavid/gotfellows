<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function sendMail(){
    	Mail::send(new SendMail);
    }

    public function email(){
    	return view('fellows.content.email');
    }
}
