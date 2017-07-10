<?php

namespace Soft\Http\Controllers;

use Soft\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Alert;
use Session;
use Redirect;
use Storage;
use Image;
class LoginController extends Controller
{
     


    public function logged(){
         return Redirect::to('/cliente');
    }



     public function LoginRedirect()
    {
        return Redirect::to('/cliente');
    }



}
