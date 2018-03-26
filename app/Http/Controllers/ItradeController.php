<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItradeController extends Controller
{
    public function postInsert(Request $request)
    {

          //获取数据
        $res = $request->except('_token');
        // $res =$request->all();
        if(!$res['web']) {
            return back()->with('error','网络类型未选取，请重新选择!');
        }
        if(!$res['color']) {
            return back()->with('error','商品颜色未选取，请重新选择!');
        }
        if(!$res['type']) {
            return back()->with('error','商品内存未选取，请重新选择!');
        }
        if(!$res['taocan']) {
            return back()->with('error','商品套餐未选取，请重新选择!');
        }

        if(!$res['number']) {
            $res['number']="1";
            $id = $res['id'];
        
        // var_dump(session('cart')[1]['id']);die();
        // var_dump(session('cart')) ;
       if (!empty(session('cart'))){
           foreach (session('cart') as $k => $v)
            {
            // echo $v;
            if($v['id'] == $id)
            {
                 $res=session('cart');
                 $res[$k]['number']++;
                 session(['cart'=>$res]);
            }else{
                // var_dump($v['id']);
                $request->session()->push('cart',$res);
            }
            } 
       } else {
            $request->session()->push('cart',$res);
       }

             //友联
           $youlian=DB::table('meizu_link')->where('status',1)->get();
             // 网站的logo
           $logo = DB::table('meizu_webconf')->first();

            $resa = DB::table('meizu_cate')->where('status','1')->get();

            $rea1 = DB::table('meizu_goods')->where('pid','75')->get();
            $rea3 = DB::table('meizu_goods')->where('pid','76')->get();
            $rea5 = DB::table('meizu_goods')->where('pid','77')->get();
            // $rea7 = DB::table('meizu_goods')->where('pid','77')->get();
            $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])
                    ->get();
            $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
           
        //显示模板  加入购车成功的模板
        // var_dump(session('cart'));
        } else {
            $id = $res['id'];
        
       if (!empty(session('cart'))){
           foreach (session('cart') as $k => $v)
            {
            // echo $v;
            if($v['id'] == $id)
            {
                 $res=session('cart');
                 $res[$k]['number']++;
                 session(['cart'=>$res]);
            }else{
                // var_dump($v['id']);
                $request->session()->push('cart',$res);
            }
            } 
       } else {
            $request->session()->push('cart',$res);
       }

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

        //显示模板  加入购车成功的模板
        // var_dump(session('cart'));
        }
        // $res = array('color'=>'red','num'=>1,'size'=>'xl','price'=>'120','id'=>1);
     
        
        return view('/index/trade/insert',['rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]);

    }

    public function getIndex(Request $request)
    {
        
       // Session::reflash();
       //定义数组
        if(empty(session('cart'))){
             echo '<script>
                 alert("购物车是空的,请添加商品");
                 window.location.href="/index/list";
             </script>';
        } else {

        }
        $res = [];
        $res = session('cart');
        foreach ($res as $k => $v) {
           // var_dump($v['id']) ;die;
            $res[$k]['info'] = DB::table('meizu_goods')->where('id',$v['id'])->first();
        }
        // var_dump($res);
        return view('index/trade/trade',['res'=>$res]);
    }


    public function getDelete(Request $request)
    {
    	$id = $request->input('id');
    	// var_dump($id);
    	$res=session('cart');
        // var_dump($res[$id]);die;
        unset($res[$id]);
        session(['cart'=>$res]);
        return back();

    }

    public function postOrder(Request $request){

        // dd($request->all());
        //获取
        if(empty(session('uid')))
        {
        echo '<script>
                 alert("请登录后购买商品");
                 window.location.href="/index/gologin";
             </script>';
        } else {
        $row = $request->except('_token');
      
        $r = $request->input('res');  
        //筛选数据
       
        $r = $this->shaixuan($r);
        

        //显示模板
        $res = [];
        $res = session('cart');
        foreach ($res as $k => $v) {
           // var_dump($v['id']) ;die;
            $res[$k]['info'] = DB::table('meizu_goods')->where('id',$v['id'])->first();
        
        }

        $address = DB::table('meizu_user_address')->where('uid',session('uid'))->get();
       // var_dump($address);
        return view('index/order/order',[
            // 'address'=>$address,
            'res'=>$res,
            'request'=>$request,
            'r'=>$r,
            'address'=>$address
            ]); 
        }
        
    }

    private function shaixuan($res)
    {
        foreach ($res as $key =>$value) {
            if(empty($value['id'])) {
                unset($res[$key]);
            }
        }
        return $res;
    }
}
