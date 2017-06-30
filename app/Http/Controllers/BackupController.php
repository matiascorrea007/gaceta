<?php

namespace Soft\Http\Controllers;

use Illuminate\Http\Request;
use Soft\Http\Controllers\Controller;
use Soft\Http\Requests;
use Carbon\Carbon ;
use Artisan;
use Log;
use Storage;
use Alert;

class BackupController extends Controller
{

 public function index()
    {
    	$link="backup";
        return view("admin.backup.export.index",compact('link'));
    }

    
  
}
