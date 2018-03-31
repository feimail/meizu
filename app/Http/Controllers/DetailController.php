<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class DetailController extends Controller
{
     public function getIndex(Request $request)
    {  
         //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
        // 网站的logo
        $logo = DB::table('meizu_webconf')->first();
    	$id=$request->id;
    	$res=DB::table('meizu_goods')
    			->join('meizu_goods_detail','meizu_goods.id','=','meizu_goods_detail.goodsid')
    			->where('meizu_goods.id','=',$id)
    			->first();
        if(!$res) {
            return view('errors/503',['error'=>'未找到的详情页']);
        }else{

        //定义空数组
        $row=[];
        //颜色
        $row['color']=explode(',', $res->color);
        //缩略图
        $row['pic']=explode(',', $res->pic);
        //网络类型
        $row['web']=explode(',', $res->web);
        //内存大小
        $row['type']=explode(',', $res->type);
        //套餐
        $row['taocan']=explode(',', $res->taocan);
        // var_dump($row);die;
        //把获取到的id存入到session
        $num=count(Session::get('history'));
        // var_dump($num);
        if($num==0) {
            Session::push('history',$id);
        }else {
            if(!in_array($id,Session::get('history'))) {
            Session::push('history',$id);
        }
        }
        
        //通过id获取数据
        $history=Session::get('history');
        if(empty($history)) {
                dd('获取id失败');
            }
        //声明数组
        $data =[];
        foreach($history as $k=>$v) {
            $data[]=DB::table('meizu_goods')->where('id',$v)->first();
        }

        //问题
        $ques =DB::table('meizu_goods_question')->where('goodsid',$id)->where('status',1)->get();

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
        
        return view('index/index/detail',['res'=>$res,'ques'=>$ques,'row'=>$row,'data'=>$data,
                                        'rea2'=>$rea1,
                                        'rea4'=>$rea3,
                                        'rea6'=>$rea5,
                                        'rea8'=>$rea7,
                                        'rea10'=>$rea9,
                                        'rowa'=>$resa,
                                        'youlian'=>$youlian,
                                        'logo'=>$logo]
                                        );
        }
        
    } 


}
