<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\CateInsertRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    /**
     * 添加分类页面
     *
     * 
     */
    public function getAdd()

    {
        //获取分类的数据
        $res = DB::table('meizu_cate')->select(DB::raw('*,concat(path,",",id)as pathes'))->orderby('pathes')->get();

       foreach($res as $k=>$v){
           //逗号拆分
           $path=explode(',',$v->path);
           //计算获取的逗号数量
           $len = count($path)-1;
           $v->name = str_repeat('|--',$len).$v->name;
       }

        //解析模板,分配数据
        return view('admin/cate/add',['row'=>$res]); 
    }

    /**
     *  主要是从pid 是否为0入手
     *
     * 添加分类方法
     */
    public function postInsert(CateInsertRequest $request)
    {  
        //获取请求的数据
        $pid = $request->input('pid');
        $res = $request->except('_token');

        // var_dump($res);
        if($pid ==  0){
           //拼装path
            $res['path']='0';
            $res['pid'] = '顶级父类';
        }else{
               //拼装path
             $row = DB::table('meizu_cate')->where('id',$pid)->first();
             $res['path'] = $row->path.','.$row->id;
             $res['pid'] = $row->name;
        }

        $row = DB::table('meizu_cate')->insert($res);

        if($row){

            return redirect('/admin/cate/index')->with('success','添加成功');
        }else{

            return back()->with('error','添加失败');
        }
        

    }

    /**
    * 分页列表
    *
    */

    public function getIndex(Request $request)
    {
       //$res= DB::table('meizu_cate')->get();
       // var_dump($res);die;
        //获取数据
        $res = DB::table('meizu_cate')->select(DB::raw('*,concat(path,",",id)as pathes'))->orderby('pathes')->where('name','like','%'.$request->input('search').'%')->paginate($request->input('num',10));
         //遍历
        foreach ($res as $k => $v) {
            //以逗号进行分割
           $path = explode(',',$v->path);

           // var_dump(count($path));die;
           //获取逗号的数量 
           $len = count($path)-1;    
           //根据逗号的数量进行重复
           $v->name = str_repeat('|--',$len).$v->name;

        }
       //解析模板
       return view('admin/cate/index',['row'=>$res,'request'=>$request->all()]);


    }

    /**
    *  修改页面
    *
    */
    public function getEdit(Request $request)
    {
       //获取id
        $id = $request->input('id');

        //获取分类的数据
        $row = DB::table('meizu_cate')->select(DB::raw('*,concat(path,",",id)as pathes'))->orderby('pathes')->get();

       foreach($row as $k=>$v){
           //逗号拆分
           $path=explode(',',$v->path);
           //计算获取的逗号数量
           $len = count($path)-1;
           $v->name = str_repeat('|--',$len).$v->name;
       }

        $res = DB::table('meizu_cate')->where('id',$id)->first();
        // var_dump($res);die;

        return view('admin/cate/edit',['list'=>$res,'row'=>$row]);

    }

    public function postUpdate(Request $request)
    {

         //获取id
        $id = $request->input('id');
        $res = $request->except( 'id',  '_token');
        //var_dump($res);
        $row = DB::table('meizu_cate')->where('id',$id)->update($res);
        if($row) {

            return redirect('/admin/cate/index')->with('success','修改成功');
       } else {

            return back()->with('error','修改失败');
       }

     } 

    /**
     * 动态修改分类状态
     */
    public function getAjaxUpdate(Request $request)
    {
        $data=$request->only('status');
        $res=DB::table('meizu_cate')->where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

   public function getDelete(Request $request)
   {
    //获取id
        $id = $request->input('id');
        //获取一条数据
        $res = DB::table('meizu_cate')->where('id',$id)->first();
       // 拼接路径进行下一步模糊查询
        $path = $res->path.','.$res->id;
        $row = DB::table('meizu_cate')->where('path','like',$path.'%')->delete();
         //删除本身
        $list = DB::table('meizu_cate')->where('id',$id)->delete();

             if($list) {

            return redirect('/admin/cate/index')->with('success','删除成功');
        } else {

            return back()->with('error','删除失败');
        }
    }




    
}
