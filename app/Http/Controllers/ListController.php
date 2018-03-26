<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function getIndex(Request $request)
    {	
        //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
         // 网站的logo
           $logo = DB::table('meizu_webconf')->first(); 
        // 接收pid
        $pid=$request->pid;
        // $pid['pid']=$pid;
        // var_dump($pid);die;
        //接收默认排序
        $url[0] =  $_GET ? $_GET : '';
        $url[1] =  $_GET ? $_GET : '';
        // $url[2] =  $_GET ? $_GET : '';
        // var_dump($url);die;
        $name = 'id';
        $o = 'asc';
        if (!empty($_GET['time']))
        {
            $arr = explode('_',$_GET['time']);
            $name = $arr[0];
            $o = $arr[1];
            unset($url[0]['time']);
        }

        if (!empty($_GET['price']))
        {
            $arr = explode('_',$_GET['price']);
            $name = $arr[0];
            $o = $arr[1];
            unset($url[0]['price']);
        }
        // var_dump($pid);die;
        if(!empty($pid)) {
            if (!empty($_GET['web']))
        {
            $res = DB::table('meizu_goods')
                -> where('web','like','%'.$_GET['web'].'%')
                ->where('pid', $pid)
                -> orderBy($name,$o)
                -> paginate(12);
            unset($url[1]['web']);
        } else
        {
             $res = DB::table('meizu_goods')
                ->where('pid', $pid)
                -> orderBy($name,$o)
                -> paginate(12);
        }
    }else {
        // echo 222;
        if (!empty($_GET['web']))
        {
            $res = DB::table('meizu_goods')
                -> where('web','like','%'.$_GET['web'].'%')
                -> orderBy($name,$o)
                -> paginate(12);
            unset($url[1]['web']);
        } else
        {
             $res = DB::table('meizu_goods')
                -> orderBy($name,$o)
                -> paginate(12);
        }
    }

        if ($_GET)
        {
            for ($i=0; $i < count($url); $i++)
            { 
                $url[$i] = http_build_query($url[$i]);
            }
        }
        
        
        // $moren=$request->moren;
        // if($moren){

        //     //判断pid是否为空
        //     if(!$pid) {
        //         // echo 111;
        //         // $res =DB::table('meizu_goods')->paginate(20);
        //     // 
            
        //     }else {
        //         //查询商品
        //             // echo 222;
        //         // $res =DB::table('meizu_goods')->where('pid',$pid)->paginate(20);

        //     }
        // }else {
        // //判断pid是否为空
        //     if(!$pid) {
        //         // $res =DB::table('meizu_goods')->paginate(20);
        //         // var_dump($res);
        //         // die;
        //     }else {
        //         //查询商品
        //         // $res =DB::table('meizu_goods')->where('pid',$pid)->paginate(20);
        //     }

        // }
        // // http_build_query

        // //接收时间排序
        // $time=$request->time;
        // if($time){

        //     //判断pid是否为空
        //     if(!$pid) {
        //         // echo 111;
        //         $res =DB::table('meizu_goods')->orderBy('time','desc')->paginate(20);
                
        //     }else {
        //         //查询商品
        //         // echo 222;
        //         $res =DB::table('meizu_goods')->where('pid',$pid)->orderBy('price','desc')->paginate(5);

        //     }
        // }
        // //接收价格排序
        // $price=$request->price;
        // //判断价格排序是否为空
        // if($price){

        //     //判断pid是否为空
        //     if(!$pid) {
        //         // echo 111;
        //         $res =DB::table('meizu_goods')->orderBy('price','desc')->paginate(20);
                
        //     }else {
        //         //查询商品
        //         // echo 222;
        //         $res =DB::table('meizu_goods')->where('pid',$pid)->orderBy('price','desc')->paginate(20);

        //     }
        // }

        //为你推荐
        $res1=DB::table('meizu_goods')->orderBy('time','desc')->limit(10)->get();
        // var_dump($res1);die;


         //获取顶级父类 
        
            $resa = DB::table('meizu_cate')->where('status','1')->get();

           //左侧分类的商品   
            foreach($resa as $k=>$v){

                $res2 = DB::table('meizu_goods')->where('pid',$v->id)->limit(10)->get();

                $v->arr = $res2;
                }

            //导航栏的商品
             $resl = DB::table('meizu_cate')->orWhere('status', '1')->where('id','=','75')->get();

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
    	// var_dump($res);die;
        return view('index/index/list',['res'=>$res,'res1'=>$res1,'pid'=>$pid,'url'=>$url,'request'=>$request->all(), 'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'rowa'=>$resa,'youlian'=>$youlian,'logo'=>$logo]);
    }

    public function getAjaxUpdate(Request $request)
    {
        $data=$request->only('status');
        
        echo $data;
    }
   
}
