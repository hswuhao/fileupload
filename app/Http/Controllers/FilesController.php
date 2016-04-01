<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use File;

use App\Upload;

class FilesController extends Controller
{
    public function getFiles()
    {
		$directory = 'uploads';

		$files = Upload::orderBy('created_at', 'desc')->get();

		return view('files', compact('files'));
    }
}
