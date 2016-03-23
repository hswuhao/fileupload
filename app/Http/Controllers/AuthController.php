<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }
}
