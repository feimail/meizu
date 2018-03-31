<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\GoodsModel;
use App\Model\CartModel;

class ItradeController extends Controller
{
    /**
    *加入购物车
    */
    public function postInsert(Request $request)
    {
        dd(session('cart'));

        //获取数据
        $res = $request->except('_token');
        // dd($res);
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

        //判断用户是否登录
        $userId = session('uid');
        // dd(session('uid'));
        //如果登录商品加入购物车
        if(isset($userId)){
            //number数量
            if(!$res['number']){
                $res['number']="1";
            }
            //判断购物车内是否已存在相同商品
            $res['buyer_id'] = $userId;
            $where['buyer_id'] = $res['buyer_id'];
            $where['good_id'] = $res['id'];
            // $where['goodsname'] = $res['goodsname'];
            // $where['price'] = $res['price'];
            $where['taocan'] = $res['taocan'];
            $where['type'] = $res['type'];
            $where['web'] = $res['web'];
            $sameGoods = CartModel::where($where)->first();
                if($sameGoods){
                      $number =  $sameGoods['number'] + $res["number"];
                      $Cart = CartModel::where('good_id',$res['id'])->update(['number'=>$number]);
                }else{
                    $goodRes = GoodsModel::where('id',$res['id'])->first();
                    $Cart = New CartModel;
                    $Cart->buyer_id = $userId;
                    $Cart->good_id  = $res['id'];
                    $Cart->goodsname  = $goodRes['goodsname'];
                    $Cart->taocan = $res['taocan'];
                    $Cart->type = $res['type'];
                    $Cart->color = $res['color'];
                    $Cart->web = $res['web'];
                    $Cart->number = $res['number'];
                    $Cart->price = $goodRes['price'];
                    $Cart->img = $goodRes['img'];
                    $cartRes = $Cart->save();
                }
        }else{
            if(!$res['number']) {
                $res['number']="1";
                $id = $res['id'];
                if (!empty(session('cart'))){
                        foreach (session('cart') as $k => $v){
                            if($v['id'] == $id){
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
                $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])->get();
                $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
            //显示模板  加入购车成功的模板
            } else {
                $id = $res['id'];
            
                if (!empty(session('cart'))){
                   foreach (session('cart') as $k => $v){
                        // echo $v;
                        if($v['id'] == $id){
                             $res=session('cart');
                             $res[$k]['number']++;
                             session(['cart'=>$res]);
                        }else{
                           
                            $request->session()->push('cart',$res);
                        }
                    } 
                } else {
                    $request->session()->push('cart',$res);
                }

                
            }

        }    
         //友联
        $youlian=DB::table('meizu_link')->where('status',1)->get();
        // 网站的logo
        $logo = DB::table('meizu_webconf')->first();
        $rea1 = DB::table('meizu_goods')->where('pid','75')->get();
        $rea3 = DB::table('meizu_goods')->where('pid','76')->get();
        $rea5 = DB::table('meizu_goods')->where('pid','77')->get();
        $rea7 = DB::table('meizu_goods')->whereIn('id', [37, 38,39,40,41])->get();
        $rea9 = DB::table('meizu_goods')->where('pid','2')->limit(6)->get();
        return view('/index/trade/insert',['rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]);
    }

    public function getIndex(Request $request)
    {
        //判断用户是否登录
        $userId = session('uid');
        if(!isset($userId)){
            //如果没有登录
            //定义数组
            if(empty(session('cart'))){
                 echo '<script>
                     alert("购物车是空的,请添加商品");
                     window.location.href="/index/list";
                 </script>';
            } 
            $res = [];
            $res = session('cart');
            foreach ($res as $k => $v) {
                $res[$k]['info'] = DB::table('meizu_goods')->where('id',$v['id'])->first();
            }
        }else{
            //如果登录的
            $res = [];
            $res = CartModel::where('buyer_id',$userId)->get();
            foreach ($res as $k => $v) {
                $res[$k]['info'] = DB::table('meizu_goods')->where('id',$v['good_id'])->first();
            }
        }
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
