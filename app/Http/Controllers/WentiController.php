<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WentiController extends Controller
{
    public function getIndex(Request $requset)
    {
        //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
         // 网站的logo
        $logo = DB::table('meizu_webconf')->first();
        $goodsid=$requset->id;
        if(empty(Session('uid'))) {

            return redirect('/index/gologin');
        }
        $uid=Session('uid');
        $res =DB::table('meizu_user')->where('id',$uid)->first();
        $goodsname=DB::table('meizu_goods')->where('id',$goodsid)->first();
        $goodsname=$goodsname->goodsname;
        $username=$res->username;
        $row['goodsid']=$goodsid;
        $row['username']=$username;
        $row['goodsname']=$goodsname;
        
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
        // var_dump($row);die;
        return view('index/index/wenti',['row'=>$row,'res1'=>$res1,'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'rowa'=>$resa,'youlian'=>$youlian,'logo'=>$logo]);
    }
    public function postAdd(Request $request)
    {
        $res =$request->except('_token');
        // var_dump($res);die;
        $goodsid=$request->input('goodsid');
        $row =DB::table('meizu_goods_question')->insert($res);
        if($row) {
            return redirect('index/detail?id='.$goodsid);
        }else {
            return back();
        }
    }
}
