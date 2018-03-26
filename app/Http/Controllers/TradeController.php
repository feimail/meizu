<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TradeController extends Controller
{
    public function getIndex(Request $request)
    {

        $res = DB::table('meizu_trade')->
        // where('color','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));
        // var_dump($res); die;
        return view('/admin/trade/index',['row'=>$res,'request'=>$request->all]);
    }


    public function getAdd()
    {
        $res = DB::table('meizu_trade')->get();
        // dd($res);
        return view('/admin/trade/add');
    }


    public function postInsert()
    {
        echo "并不用添加";
    }

    //删除购物车项
    public function getDelete(Request $request)
    {
         $id = $request->input('id','gid');
         // echo $id;die;
        $res = DB::table('meizu_trade')->where('id',$id)->delete();
        //判断
        if($res) {

            return redirect('/admin/trade/index')->with('success','删除成功');
        }   else {
            return back()->with('error','删除失败');
        }
    }

    public function getUpdate()
    {
        echo '不要随便修改';
        return back();

    }



}
