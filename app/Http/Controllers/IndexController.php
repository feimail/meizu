<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {   
        //获取顶级父类 
        $config = DB::table('meizu_webconf')->where('status','=','1')->get();
        if($config){
        $resa = DB::table('meizu_cate')->where('status','1')->limit(7)->get();
        //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
         //左侧分类的商品   
        foreach($resa as $k=>$v){
        	$res2 = DB::table('meizu_goods')->where('pid',$v->id)->limit(10)->get();
        	$v->arr = $res2;
          $res3 = DB::table('meizu_goods')->where('pid',$v->id)->limit(1)->get();
              // dd($res3[0]);
              if(isset($res3[0])){
          	     $v->brr  = $res3[0];
              }
        }
        // 网站的logo
        $logo = DB::table('meizu_webconf')->first();
        //导航栏的商品
        // $resl = DB::table('meizu_cate')->orWhere('status', '1')->where('id','=','75')->get();
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

        //热销商品
        $good1 = DB::table('meizu_goods')->whereIn('id',[1,2,18,20,19,5,6,33,32,31])->get();
        //手机
        $good2 = DB::table('meizu_goods')->whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get();
        //精选配置
        $good3 = DB::table('meizu_goods')->whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get(); 
        //智能硬件
        $good4 = DB::table('meizu_goods')->whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get();
        //周边配置
        $good5 = DB::table('meizu_goods')->whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get();
        return view('index/index/index',['rowa'=>$resa,
                    'rea2'=>$rea1,
                    'rea4'=>$rea3,
                    'rea6'=>$rea5,
                    'rea8'=>$rea7,
                    'rea10'=>$rea9,
                    'good1'=>$good1,
                    'good2'=>$good2,
                    'good3'=>$good3,
                    'good4'=>$good4,
                    'good5'=>$good5,
                    'youlian'=>$youlian,
                    'logo' =>$logo,
                    ]);
        }else{
        return view('homes/index');
        }
    }
 }



