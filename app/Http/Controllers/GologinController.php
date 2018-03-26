<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GologinController extends Controller
{
     public function getIndex()
     {
        return view('/index/index/gologin');
     }
}
