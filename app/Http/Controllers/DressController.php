<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

    class DressController extends Controller
    {
        public function add(Request $request)
        {
        
         $row = $request->except('_token');
         // var_dump($row);
         if(empty($row['name'] && $row['phone'] && $row['sel'] && $row['sels'] && $row['selx'])) {
            // return back();
            // redirect('/index/trade/order');
            echo '<script>
                 alert("信息不能为空");
                 window.location.href="http://www.meizu.com/index/trade/";
                 </script>';
         } else {

        $id = $row['uid'];         
        $re = DB::table('meizu_user_address')->insert($row);
        
        // var_dump($res);
        $address = DB::table('meizu_user_address')->where('uid',$id)->get();
        
        //显示模板
        $res = [];
        $res = session('cart');
        foreach ($res as $k => $v) {
           // var_dump($v['id']) ;die;
            $res[$k]['info'] = DB::table('meizu_goods')->where('id',$v['id'])->first();
        
        }

        // $address = DB::table('meizu_user_address')->where('uid', session('id'))->get();
       // var_dump($address);
        return view('index/order/order',[
            // 'address'=>$address,
            'res'=>$res,
            'request'=>$request,
            'address'=>$address
            ]);
         }
        

        }

        public function sheng()
        {
        $r = DB::table('meizu_city')->where('upid',0)->get();
        
        return $r;

        // echo 1234;
        }

        public function city($id)
        {
           $re = DB::table('meizu_city')->where('upid',$id)->get();
        
            return $re; 
        }

        public function xian($id)
        {
            $res = DB::table('meizu_city')->where('upid',$id)->get();
        
            return $res;
        }
    }
