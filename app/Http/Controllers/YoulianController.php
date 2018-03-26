<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class YoulianController extends Controller
{
    /**
    *   友联添加
    */
    public function getAdd()
    {
        return view('index/index/youlian');
    }
    public function postInsert(Request $request)
    {
        $res=$request->except('_token');
        // var_dump($res);die;
        $row =DB::table('meizu_link')->insert($res);
        return redirect('index');
    }
}
