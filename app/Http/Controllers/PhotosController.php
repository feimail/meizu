<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    /**
     * 
     *
     * 收藏商品页面
     */
    public function getIndex(Request $request)
    {   

        
          if(session('uid')){
            
            
             //查询数据
            $shougoods = DB::table('meizu_goods')
            ->join('meizu_shoucang', 'meizu_goods.id', '=', 'meizu_shoucang.gid')
            // ->join('meizu_user', 'meizu_user.id', '=', 'meizu_shoucang.uid')
            ->select('meizu_goods.*')
            ->where('meizu_shoucang.uid','=',session('uid'))
            ->paginate(5);
           
             // dd($shougoods);
          //导航栏的商品
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

            //友联
            $youlian=DB::table('meizu_link')->where('status',1)->get();
          // 网站的logo
            $logo = DB::table('meizu_webconf')->first();    
               return view('index/index/shoucang',[
                            'shougoods'=>$shougoods,
                            'rea2'=>$rea1,
                            'rea4'=>$rea3,
                            'rea6'=>$rea5,
                            'rea8'=>$rea7,
                            'rea10'=>$rea9,
                            'request'=>$request->all(),
                            'youlian'=>$youlian,
                            'logo'=>$logo

                          ]);

               }else{

              return redirect('/index/gologin');
        }




    }

      /**
     * 动态修改分类状态
     */
   
    public function getAjaxupdate(Request $request)
    {  

       
       //获取请求
        $gid=$request->only('id');
        // var_dump($gid);
        $uid = session('uid');
        if(!$uid){
          echo 4;die;
        }
        // return $uid;
       // $row = json_decode(json_encode(DB::table('meizu_shoucang')->where('gid',$gid)->where('uid',$uid)->get()),true);
        $row = DB::table('meizu_shoucang')->where('gid',$gid)->where('uid',$uid)->get();

       if($row){
          echo 3;die;
        }else{  
        //插入数据库
        $res =  DB::table('meizu_shoucang')->insert(['gid' => $gid['id'],'uid' =>$uid]);
               if($res){
                  echo 1;die;
                 }else{

                echo 0;die;
               }

             }

        

    }

    public function getAjaxdelete(Request $request)
    {  
       //   //获取请求
        $gid=$request->only('id');
        // var_dump($gid);
        $uid = session('uid');

        $res = DB::table('meizu_shoucang')->where('gid',$gid)->where('uid',$uid)->delete();
        if($res){
              echo 1;die;
        }else{

              echo 0;die;
        }
      
    }

}