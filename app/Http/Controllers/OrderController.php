<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
    *   订单的查看
    */
    public function getIndex(Request $request)
    {
        //获取参数信息
        // $row = $request->all();
        // var_dump($row);
        
        $res = DB::table('meizu_order')->get();
        // var_dump($res);
        return view('admin/order/index',['row'=>$res]);
    }

    /**
    *   订单状态的修改
    */
    public function getEdit(Request $request)
    {
            $id = $request->input('id');
            // var_dump($id);
            //根据地id查询表中的相关信息

          $res = DB::table('meizu_order')->where('id',$id)->first();
          // var_dump($res);
          return view('admin/order/edit',['row'=>$res]);

    }




    public function postUpdate(Request $request)
    {
        // echo 123;
        $id = $request->only('id');
        // var_dump($id);
        $res = $request->except('id','_token');
        var_dump($res);

        $result = DB::table('meizu_order')->where('id',$id)->update($res);
        // var_dump($result);
        return redirect('admin/order');
    }

}
