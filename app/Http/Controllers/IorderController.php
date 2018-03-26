<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IorderController extends Controller
{
    //
    public function postInsert(Request $request)
    {
        $red = $request->except('_token','paytype');
        
        // var_dump($res);die;
        // $request->session()->flush();
        session(['cart'=>null]);

        $row = DB::table('meizu_order')->insert($red);
        
        // var_dump($row);die;
        //获取顶级父类 
        
            $resa = DB::table('meizu_cate')->where('status','1')->get();
             //友联
            $youlian=DB::table('meizu_link')->where('status',1)->get();
             // 网站的logo
            $logo = DB::table('meizu_webconf')->first();
          

            $rea1 = DB::table('meizu_goods')->where('pid','75')->get();
            $rea3 = DB::table('meizu_goods')->where('pid','76')->get();
            $rea5 = DB::table('meizu_goods')->where('pid','77')->get();
            // $rea7 = DB::table('meizu_goods')->where('pid','77')->get();
            $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])->get();
            $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
            
           
            $id = session('uid');
            $re = DB::table('meizu_user_address')->where('uid',$id)->get();
            // var_dump($re);

       return view('index/order/insert',['re'=>$re,'red'=>$red,'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]);

    }

    public function getIndex(Request $request)
    {

             if(empty(session('uid')))
            {
                echo '<script>
                  alert("请登录后再查看订单");
                  window.location.href="/index/gologin";
                </script>';
            } else {
               
            }
             $row = $request->all();
              // var_dump($res);
            $res = DB::table('meizu_order')->where('userid',$row['id'])->get();
             // var_dump($res);
             //友联
            $youlian=DB::table('meizu_link')->where('status',1)->get();
             // 网站的logo
            $logo = DB::table('meizu_webconf')->first();

            $rea1 = DB::table('meizu_goods')->where('pid','75')->get();
            $rea3 = DB::table('meizu_goods')->where('pid','76')->get();
            $rea5 = DB::table('meizu_goods')->where('pid','77')->get();
            // $rea7 = DB::table('meizu_goods')->where('pid','77')->get();
            $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])
                    ->get();
            $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
            
            $users = DB::table('meizu_goods')
                    ->whereIn('id', [1, 2, 3])
                    ->get();

        return view('index/order/index',['res'=>$res,'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]);
    }

    public function getInsert(Request $request)
    {
        $row = $request->all();
        $status['status']=2;
       
        // var_dump($status);die;
         $res = DB::table('meizu_order')->where('id',$row['id'])->update($status);
        // var_dump($res);
         return back();
    }
}
