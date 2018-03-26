<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UcenterContrller extends Controller
{

    //个人中心的首页
    public function getEdit(Request $request)
    {

        // echo 123;
        $id = session('uid');
        // var_dump($id);die;
        // $id = $request->input('uid');
        // echo $id;die;

        $row = DB::table('meizu_user')->where('id',$id)->get();
        // var_dump($row);
        // var_dump($row);die;
         $resa = DB::table('meizu_cate')->where('status','1')->get();

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
        return view('/index/ucenter/ucenter',['row'=>$row,'rea2'=>$rea1,'rea4'=>$rea3,'rea6'=>$rea5,'rea8'=>$rea7,'rea10'=>$rea9,'youlian'=>$youlian,'logo'=>$logo]);

    }

     // 获取文件名
    private function getUploadFileName($request)
    {
        if($request->hasFile('pic')){
            $name = time().rand(100000,999999);
            $suffix = $request->file('pic')->getClientOriginalExtension();
            $fileName = $name.'.'.$suffix;
            $dir = './uploads/userpic';
            //进行上传
            if($request->file('pic')->move($dir, $fileName)){
                //写入当前图片的绝对路径
                $pic = trim($dir.'/'.$fileName,'.');
                return $pic;
            }
        }
    }




    //个人中心的信息修改
    public function postUpdate(Request $request)
    {
        $id = $request->input('id');

        $row = $request->except('_token','id');
        // $pas = $request->except('_token','id');
       
       //获取数据
        $res=$request->except('_token','id');
        // var_dump($res);die;
        // 图片上传
        if($request->hasFile('pic')){
             $pic = $this->getUploadFileName($request); 
            $res['pic'] = $pic ? $pic : '';

        $res=DB::table('meizu_user')->where('id',$request->input('id'))->update($res);
        if($res){
                return redirect('/index/ucenter/edit?id='.$id)->with('info','更新成功');
            }else{
                return back()->with('error','更新失败');
            }
         }else {

            
            $pic=DB::table('meizu_user')->where('id',$request->input('id'))->first();
            
            $res['pic']=$pic->pic;
            // dd($res);
            $res = DB::table('meizu_user')->where('id',$request->input('id'))->update($row);
           

            if($res){
                return redirect('/index/ucenter/edit?id='.$id);
            }else{
                return back()->with('error','修改失败');
            }
        }
         
    }

    // 个人信息密码修改
    public  function postXiugai(Request $request)
    {
       $res = $request->only('id','repassword');
       // var_dump($res);
        $row = $request->except('_token','id','repassword');

        $nepassword = $row['password'];
        //var_dump($row);
        $hashedPassword=DB::table('meizu_user')->where('id',$res['id'])->select('password')->first();
       // var_dump($hashedPassword);die;
        
       if(Hash::check($res['repassword'],$hashedPassword->password)) {
            $row['password'] = Hash::make($nepassword);
            $res = DB::table('meizu_user')->where('id',$res['id'])->update($row);
       
             // /index/gologin
            // return redirect('/index/gologin');
            // $res=session('uid');
            //  unset($res);
            // session(['cart'=>$res]);
                  echo '<script>
                    alert("修改成功");
                    window.location.href="http://www.meizu.com/index/gologin";
                 </script>';
           
        } else {
                echo '<script>
                    alert("原密码不对");
                    window.location.href="http://www.meizu.com/index/ucenter/edit";
                 </script>';

         // return back()->with('error','原密码不正确');
        }
   
    }




}
