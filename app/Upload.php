<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = 
    [
    	'original_name',
    	'formatted_name',
    	'type',
    	'size'
    ];
}
