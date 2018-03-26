<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Goods;
class GoodsController extends Controller
{
  /**
  * 商品添加页面
  */
   public function getAdd()
   {
        //获取分类的数据
        $res =DB::table('meizu_cate')-> select(DB::raw('*,concat(path,id) as pathes'))->orderby('pathes')->get();
        // dd($res);
        //遍历
        foreach($res as $k=>$v) {
            $path = explode(',',$v->path);
            // var_dump($path);
            $len=count($path)-1;
            // var_dump($len);
            $v->name=str_repeat('|--', $len).$v->name;
            // var_dump($v->name);

        }
       return view('admin/goods/add',['row'=>$res]);
   }

   /**
   *  商品添加方法
   */
   public function postInsert(Request $request)
   {
      //获取商品表需要的数据
      $res1 = $request->except('color','_token');
      $res1['time']=date('Y-m-d H:i:s');
      //图片上传
      if($request->hasFile('img')) {

          $name = md5(rand(10000,99999).time());
           $suffix = $request->file('img')->getClientOriginalExtension();
            $images=$request->file('img')->move('./uploads/datu',$name.'.'.$suffix);
            $path='/uploads/datu/'.$name.'.'.$suffix;
              $res1['img']=$path;
            } else {
              $res1['img']='/uploads/datu/0.jpg';
            }
           
      
      $res=DB::table('meizu_goods')->insert($res1);
     // $res['name']=1; 

      if($res) {
        return redirect('admin/goods/index/')->with('success','添加成功');
      }
   }

   /**
   *  商品显示方法
   */
   public function getIndex(Request $request)
   {

       $row = $request->all();
        // var_dump($row);
       $res = DB::table('meizu_goods')->
        where('goodsname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));
        return view('admin/goods/index',['row'=>$res,'request'=>$request->all()]);

   }

   /**
   *  商品详情信息修改页面
   */
   public function getEdit(Request $request)
   {
      //接收数据
        $id=$request->only('id');
        //在数据库查出信息
        $result=DB::table('meizu_goods')->where('id',$id)->first();
        
        // var_dump($res);
        //获取分类的数据
        $res =DB::table('meizu_cate')-> select(DB::raw('*,concat(path,id) as pathes'))->orderby('pathes')->get();
        // dd($res);
        //遍历
        foreach($res as $k=>$v) {
            $path = explode(',',$v->path);
            // var_dump($path);
            $len=count($path)-1;
            // var_dump($len);
            $v->name=str_repeat('|--', $len).$v->name;
            // var_dump($v->name);

        }
        return view('admin/goods/edit',['row'=>$res,'result'=>$result]);
   }

   /**
     * 动态修改分类状态
     */
    public function getAjaxUpdate(Request $request)
    {
        $data=$request->only('status');
        $res=DB::table('meizu_goods')->where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }


   /*********************************商品详情信息方法*****************************************/

   /**
   *  商品详情信息添加页面
   */
   public function getRadd(Request $request)
   {
        // return redirect('/admin/goods/radd/'.$res);

      // echo $id;
    $id=$request->input('id');
    $res=DB::table('meizu_goods_color')->get();
    $row=DB::table('meizu_goods')->where('id',$id)->first();


    return view('admin/goods/radd',['row'=>$row,'res'=>$res]);
   }

   /**
   *  商品详情信息添加方法
   */
   public function postRinsert(Request $request)
   {

    $imgs =$request->except('goodsid','_token','color');
    $res =$request->except('_token','img1','img2','img3','img4');
    $id =$res['goodsid'];
    // dd($imgs);die;
    if($imgs) {
         foreach($imgs as $k =>$v) {
          $name = md5(rand(10000,99999).time());
           $suffix = $v->getClientOriginalExtension();
            $images=$v->move('./uploads/suoluetu',$name.'.'.$suffix);
            $path[]='/uploads/suoluetu/'.$name.'.'.$suffix;
            
            
        }
            
            $imgs =implode(',', $path);
            $res['pic']=$imgs;
            //将数据插入详情表中
            $row=DB::table('meizu_goods_detail')->insert($res);
            

            if($row) {

             return redirect('admin/goods/rindex?id='.$id)->with('success','添加成功');
            }else {
              return back()->with('error','添加失败');
            }
            
        }
            $res['pic']="/uploads/suoluetu/0.jpg";
            $row=DB::table('meizu_goods_detail')->insert($res);
            if($row) {
              return redirect('admin/goods/rindex?id='.$id)->with('success','添加成功');
            }else {
              return back()->with('error','添加失败');
            }
            
   }

   
   /**
   *  商品详情信息修改方法
   */
   public function postUpdate(Request $request)
   {
      $id=$request->input('id');
      $res=$request->except('id','imgs','_token');

      //判断是否有文件上传
      if(!$request->hasFile('img')) {
          //如果没有修改图片使用原图片
          $res['img']=$request->input('imgs');
          //修改
          $re=DB::table('meizu_goods')->where('id',$id)->update($res);
          if ($re) {

            return redirect('admin/goods/index/')->with('success','修改成功');
          }else {
            return back()->with('error','修改失败');
          }

      } else {
        //如果有文件上传
        $jieguo= $request->except('id','imgs','_token');
        $name = md5(rand(10000,99999).time());
            $suffix = $request->file('img')->getClientOriginalExtension();
            $images=$request->file('img')->move('./uploads/datu',$name.'.'.$suffix);
            $path='/uploads/datu/'.$name.'.'.$suffix;
              $jieguo['img']=$path;

            //插入数据库
              $re=DB::table('meizu_goods')->where('id',$id)->update($jieguo);
              if($re) {
                return redirect('admin/goods/index/')->with('success','修改成功');
              }else {
                return back()->with('error','修改失败');
              }
      }

   }

   /**
   *  商品详情信息删除方法
   */
   public function getDelete(Request $request)
   {
      //获取传过来的id
      $id =$request->input('id');
      var_dump($id);
      //通过商品的id 即为 商品详情的goodsid
      //先删除此商品的详情id
      DB::table('meizu_goods_detail')->where('goodsid',$id)->delete();
      $res =DB::table('meizu_goods')->where('id',$id)->delete();
        if($res) {
          return redirect('admin/goods/index/')->with('success','删除成功');
        }else {
           return redirect('admin/goods/index/')->with('error','删除失败');
        }
   }

   /**
   *  商品详情信息主页
   */
   public function getRindex(Request $request)
   {  

      $id =$request->input('id');
      $url =$request->all();
      
      $res=DB::table('meizu_goods')->where('id',$id)->orderby('id','desc')->first();
      $result=DB::table('meizu_goods_detail')->where('goodsid',$id)->orderby('id','asc')->get();

      
      if(!$result) {

         return view('admin/goods/radd',['row'=>$res,'result'=>$result]);

      }else {
        
        //将图片地址字符串转化为数组
        foreach ($result as $v)
        {
          $v -> pic = explode(',', $v->pic);
        }
        // dd($result);
        return view('admin/goods/rindex',['res'=>$res,'result'=>$result]);
      }

      

   }
   /**
   *  商品详情修改修改页面
   */
   public function getRedit(Request $request)
   {
      $id=$request->input('id');
      $rows =DB::table('meizu_goods_detail')->where('id',$id)->first();
      $goodsid = $rows->goodsid;
      $row=DB::table('meizu_goods')->where('id',$goodsid)->first();

      return view("admin/goods/redit",['row'=>$row,'rows'=>$rows]);
   }
   /**
   *  商品详情信息修改方法
   */
   public function postRupdate(Request $request)
   {
      $imgs =$request->except('goodsid','color','_token','id');
      // dd($imgs);
    $res =$request->except('_token','img1','img2','img3','img4');
    $goodsid =$res['goodsid'];
    $ids =$res['id'];
    // dd($ids);
    $res =$request->except('_token','img1','img2','img3','img4','id');
    // dd($res);
    if($imgs) {
         foreach($imgs as $k =>$v) {
          $name = md5(rand(10000,99999).time());
           $suffix = $v->getClientOriginalExtension();
            $images=$v->move('./uploads/suoluetu',$name.'.'.$suffix);
            $path[]='/uploads/suoluetu/'.$name.'.'.$suffix;
            $imgs =implode(',', $path);
            $res['pic']=$imgs;
        }
                   
            //将数据修改
            $row=DB::table('meizu_goods_detail')->where('id',$ids)->update($res);
            

            if($row) {

             return redirect('admin/goods/rindex?id='.$goodsid)->with('success','修改成功');
            } else {
              return back()->with('error','修改失败');
            }
            
        }
            // var_dump($res);die;
            $row=DB::table('meizu_goods_detail')->where('id',$ids)->update($res);
            if($row) {
              return redirect('admin/goods/rindex?id='.$goodsid)->with('success','修改成功');
            } else {
              return back()->with('error','修改失败');
            }
            
   }

   /**
   *  商品详情信息删除方法
   */
   public function getRdelete(Request $request)
   {
      //接收传过来的商品详情id
      $id=$request->input('id');
      //根据id查出商品详情信息的商品id
      $res=DB::table('meizu_goods_detail')->where('id',$id)->first();
      $goodsid=$res->goodsid;
      //执行删除
      $result=DB::table('meizu_goods_detail')->where('id',$id)->delete();
      //判断
      if($result) {
        return redirect('admin/goods/rindex?id='.$goodsid)->with('success','删除成功');
      } else {
        return back()->with('error','删除失败');
      }
      

   }

   /*********************************商品答疑模块*****************************************/
   /**
   *  商品答疑页面
   */
   public function getQindex(Request $request)
   {
      $row=$request->all();
      // var_dump($request);die;
      $res = DB::table('meizu_goods_question')->
        where('goodsname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',5));
      
      return view('admin/goods/qindex',['row'=>$res,'request'=>$request->all()]);
   }
  

   /**
     * 动态修改分类状态
     */
    public function getQuesajaxUpdate(Request $request)
    {
        $data=$request->only('status');
        $res=DB::table('meizu_goods_question')->where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }
    /**
    * 商品答疑修改
    */
    public function getQedit(Request $request)
    {
      $id=$request->input('id');
      $res=DB::table('meizu_goods_question')->where('id',$id)->first();
      return view('admin/goods/qedit',['res'=>$res]);
    }

    /**
    * 商品答疑修改方法
    */
    public function postQupdate(Request $request)
    {
      $id=$request->input('id');
      $answer=$request->except('id','_token');
      $res =DB::table('meizu_goods_question')->where('id',$id)->update($answer);
      if ($res) {

            return redirect('admin/goods/qindex/')->with('success','修改成功');
          }else {
            return back()->with('error','修改失败');
          }
    }
    /**
    * 商品答疑删除方法
    */
    public function getQdelete(Request $request)
    {
      $id=$request->all();
      $res=DB::table('meizu_goods_question')->where('id',$id)->delete($id);
      if ($res) {

            return redirect('admin/goods/qindex/')->with('success','修改成功');
          }else {
            return back()->with('error','修改失败');
          }

    }
} 
    

