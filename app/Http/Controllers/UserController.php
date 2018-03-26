<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserInsertRequest;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
    *   用户的添加页面
    */
    public function getAdd()
    {

        return view('admin/user/add');
    }

    /**
    *   用户的信息添加方法
    */
    public function postInsert(UserAddRequest $request)
    {
        
        //获取数据
        $res = $request->except('repassword','_token');
         // var_dump($res);die;


        $res['password'] = Hash::make($request->input('password'));

         // 上传图片
        $pic = $this->getUploadFileName($request); 
        $res['pic'] = $pic ? $pic : '';
        $res['status']=0;
        // var_dump($res);

        
        $pro = DB::table('meizu_user')->insert($res);

        if($pro){

            return redirect('/admin/user/index')->with('success','添加成功');
        } else {
            return back()->with('error','添加失败');
        } 

        
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



    /**
    *   用户列表
    */
    public function getIndex(Request $request)
    {
        //搜索的值


        //下拉的值  10 25 50 100

        //获取总数据
        $res = DB::table('meizu_user')->
        where('username','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));

        //解析模板  分配数据
        return view('admin/user/index',['row'=>$res,'request'=>$request->all()]);
    }

    /**
    *   用户的修改页面
    */
   
    public function getEdit(Request $request)
    {
       $id = $request->input('id');

       $row = DB::table('meizu_user')->where('id','=',$id)->first();

       return view('admin/user/edit',['row'=>$row]);
    }

     /**
     * 动态修改分类状态
     */
    public function getAjaxupdate(Request $request)
    {   
       
         $data=$request->only('status');
        // dd($data);
        $res=DB::table('meizu_user')->where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
    *  用户的修改方法
    */

    public function postUpdate(UserInsertRequest $request)
    {
        $id = $request->input('id');

        $row = $request->except('_token','id');

       //获取数据
        $res=$request->except(['_token','id']);
        // var_dump($res);die;
        // 图片上传
        if($request->hasFile('pic')){
             $pic = $this->getUploadFileName($request); 
            $res['pic'] = $pic ? $pic : '';

        $res=DB::table('meizu_user')->where('id',$request->input('id'))->update($res);
        if($res){
                return redirect('/admin/user/index')->with('info','更新成功');
            }else{
                return back()->with('error','更新失败');
            }
         }else {

            
            $pic=DB::table('meizu_user')->where('id',$request->input('id'))->first();
            
            $res['pic']=$pic->pic;
            // dd($res);
            $res = DB::table('meizu_user')->where('id',$request->input('id'))->update($row);
           

            if($res){
                return redirect('./admin/user/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }
    }

    /**
    *   用户删除
    */
    public function getDelete(Request $request)
    {   
        // 获取id
        $id = $request->input('id');

        // 执行删除
        $res = DB::table('meizu_user')->where('id',$id)->delete();

        // 判断
        if($res){
            return redirect('/admin/user/index')->with('success','删除成功');
       } else{
            return back()->with('error','删除失败');
       }
    }
}

