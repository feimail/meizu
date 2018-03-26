<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function getIndex()
    {
        echo 111;
    }
    public function postAdd(Request $request)
    {   
        //如果$res['number']为空 则定义默认购买数量为1
        $res =$request->all();
        if(!$res['number']) {
            $res['number']="1";
            var_dump($res);
        }else {
            var_dump($res);
        }
        
    }
}
