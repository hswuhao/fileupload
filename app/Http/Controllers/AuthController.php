<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required',
    	]);

         $email = $request['email'];
         $password = $request['password'];

    	if(!Auth::attempt(['email' => $email, 'password' => $password], $request->has('remember')))
    	{
    		return 'Could not signed you in';
    	}

    	return redirect('/files');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}
