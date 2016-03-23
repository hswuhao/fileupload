<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Upload;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
    	$this->validate($request, 
    	[
    		'file' => 'required|mimes:zip'
    	]);
    	$file = $request->file('file');

    	$name = time() . str_replace(' ', '_', $file->getClientOriginalName());

    	$path = 'uploads';

        Upload::create([
            "original_name" => $file->getClientOriginalName(),
            "formatted_name" => $name,
            "type" => $file->getMimeType(),
            "size" => $file->getSize()
        ]);

    	$file->move($path, $name);

    	return redirect('/')->with('info', 'File upload completed.');
    }
}
