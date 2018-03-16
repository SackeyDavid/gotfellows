<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request;

class UsersController extends Controller
{
    public function index(){
    		$users = [
		'0' => [
			'first_name' => 'Renato',
			'last_name' => 'Hysa',
			'location' => 'Albania'
		],
		'1' => [
			'first_name' => 'David',
			'last_name' => 'Sackey',
			'location' => 'Ghana'
		]

	];
    return $users;
    }
}
