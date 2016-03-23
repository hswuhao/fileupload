<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
    	$this->validate($request, 
    	[
    		'file' => 'required|mimes:zip'
    	]);
    	$file = $request->file('file');

    	$name = time() . $file->getClientOriginalName();

    	$path = 'uploads';

    	$file->move($path, $name);

    	return "File upload done.";
    }
}
