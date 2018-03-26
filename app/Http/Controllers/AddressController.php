<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    //
    public  function getIndex(Request $request)
    {

    
         //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
         // 网站的logo
        $logo = DB::table('meizu_webconf')->first();
      
        //模板首尾的遍历
        $rea1 = DB::table('meizu_goods')->where('pid','75')->get();
        $rea3 = DB::table('meizu_goods')->where('pid','76')->get();
        $rea5 = DB::table('meizu_goods')->where('pid','77')->get();
        // $rea7 = DB::table('meizu_goods')->where('pid','77')->get();
        $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])->get();
        $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
        
        /**
        *   获取登录id并遍历出地址信息
        */
        $id = session('uid');
        $re = DB::table('meizu_user_address')->where('uid',$id)->get();
        return view('index/ucenter/address',['re'=>$re,'id'=>$id,'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]); 
    }

    public function postInsert(Request $request)
    {   
        /**
        *   判断是否登录否的话弹到登录页面
        *   判断字段是否填全否的话弹回该页面
        */
        if (empty(session('uid'))) {
            echo '<script>
                 alert("请先登陆");
                 window.location.href="/index/gologin";
                 </script>';
        } else {
        $row = $request->except('_token');
        // var_dump($row);
        if(empty($row['name'] && $row['phone'] && $row['sel'] && $row['sels'] && $row['selx'])) {
            // return back();
            // redirect('/index/trade/order');
            echo '<script>
                 alert("所有信息必须填写");
                 window.location.href="/index/address/";
                 </script>';
         } else {
           /**
           *    获取插入的信息,并且出入表中
           */
            $id = $row['uid'];         
            $re = DB::table('meizu_user_address')->insert($row);

            return back();
         }
     }
    }
    //获取id删除表中的关联的信息
    public function getDel(Request $request)
    {
        $row = $request->except('_token');
        // var_dump($row);
        $re = DB::table('meizu_user_address')->where('id',$row)->delete();
        return back();
    }



}
