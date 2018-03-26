<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ConfigInsertRequest;
use App\Http\Requests\ConfigUpdateRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /**
    *  网站配置的 添加页面
    *
    */
    // public function getAdd()
    // {

    //     return view('admin/config/add');
    // }

    /**
    *
    *   添加的方法
    */
    // public function postInsert(ConfigInsertRequest $request)
    // {
    //    // $res = $request->all();
    //    $res = $request->except('_token');

      
    //     $ddfile = $this->getUploadFileName($request);
    // 	$res['headlogo'] = $ddfile;

    //     // var_dump($res);
 
    // 	$row = DB::table('meizu_webconf')->insert($res);
    // 	if($row){

    // 		return redirect('/admin/config/index')->with('success','添加成功');
    // 	}else{

    // 		return back()->with('error','添加失败');
    // 	}
     
        
    // }

    /**
    *   上传图片
    */

     private function getUploadFileName($request)
    {
    	if($request->hasFile('headlogo')){
    		$name = time().rand(100000,999999);
			$suffix = $request->file('headlogo')->getClientOriginalExtension();
			$fileName = $name.'.'.$suffix;
    		$dir = './uploads/logo';
    		//进行上传
    		if($request->file('headlogo')->move($dir,$fileName)){
    			//写入当前图片的绝对路径
    			$profile = trim($dir.'/'.$fileName,'.');
    			// $profile =$dir.$fileName;
    			return $profile;
    		}
    	}
    }  
   /**
     * 动态修改分类状态
     */
    public function getAjaxupdate(Request $request)
    {
        $data=$request->only('status');
        $res=DB::table('meizu_webconf')->where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }


    /**    
    *  网络配置的列表
    *
    */

    public function getIndex(Request $request)
    {
       $res =  DB::table('meizu_webconf')->get();

       return view('admin/config/index',['row'=>$res]);

    }
    /**
    *  修改页面
    *
    */
    public function getEdit(Request $request)
    {

    	$id = $request->input('id');
    	$res = DB::table('meizu_webconf')->where('id',$id)->first();


    	// var_dump($res);die;

    	return view('admin/config/edit',['row'=>$res]);
    }

    /**
    *  修改的方法
    *
    */

    public function postUpdate(ConfigUpdateRequest $request)
    {
       
        //获取id
        $id = $request->input('id');
        
        $res = $request->except('id','_token','status');
        $ddfile = $this->getUploadFileName($request);
        $res['headlogo'] = $ddfile;
        
        // 过去之前给修改的数据
        $before_res = DB::table('meizu_webconf')->first();


        if($res['headlogo']==null){
            $res['headlogo'] = $before_res->headlogo;

             $row = DB::table('meizu_webconf')->where('id',$id)->update($res);
              if($row) {

                return redirect('/admin/config/index')->with('success','修改成功');
           } else {

                return back()->with('error','修改失败');
           }
        } else {
            $row = DB::table('meizu_webconf')->where('id',$id)->update($res);

       
             if($row) {

                 return redirect('/admin/config/index')->with('success','修改成功');
             } else {

                return back()->with('error','修改失败');
            }
        }
  }
}
