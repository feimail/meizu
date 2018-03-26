<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class YouController extends Controller
{
    /**
    *	友联添加界面
    *
    */
    public function getAdd()
    {
        return view('admin/you/add');
    }
     /**
    *	友联插入方法
    *
    */
    public function postInsert(Request $request)
    {
    	$res = $request->except('_token');
    	 // var_dump($res);

    	$pro = DB::table('meizu_link')->insert($res);

        if($pro){

            return redirect('/admin/you/index')->with('success','添加成功');
        } else {
            return back()->with('error','添加失败');
        }
    }

    /**
    *  动态修改分类状态
    *
    */
    public function getAjaxupdate(Request $request)
    {

        // $data = $request->only(['status']);
        $data = $request->input('status');
        $res = DB::table('meizu_link')->where('id',$request->input('id'))->update(['status'=>$data]);
            if($res){
                echo 1;die;
            }else{
                echo 0;die;
            }

    }

    /**
    *	友联查看
    */

   public function getIndex(Request $request)
    {
        

        //获取总数据
        $res = DB::table('meizu_link')->
        where('name','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));

        //解析模板  分配数据
        return view('admin/you/index',['row'=>$res,'request'=>$request->all()]);
    }
   /**
   *	友联修改页面
   */
    public function getEdit(Request $request)
    {    $id = $request->input('id');
    	$res = DB::table('meizu_link')->where('id',$id)->first();

    	// /var_dump($res);
        

        return view('admin/you/edit',['row'=>$res]);
    }

      /**
   *	友联修改方法
   */
    public function postUpdate(Request $request)
    {   
    	$res = $request->except('_token','id');
    	// var_dump($res);die;

        $id = $request->input('id');

    	$row = DB::table('meizu_link')->where('id',$id)->update($res);

    	 if($row){
                return redirect('./admin/you/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
    }
    
  /**
  *   友情删除
  *
  */
   public function getDelete(Request $request)
    {   
    	$id = $request->input('id');

    	$row = DB::table('meizu_link')->where('id',$id)->delete();

    	 if($row){
                return redirect('./admin/you/index')->with('success','删除成功');
            }else{
                return back()->with('error','删除失败');
            }
    }
  

}
