@extends('./layout.index')

@section('xiugai')
  <li> <a href="/back/#"><i class="icon-calculate"></i>商品详情信息</a> 
       <ul class=""> 
        <!-- <li><a href="/admin/user/index">详情列表</a></li> -->
        <!-- <li><a href="/admin/user/add">用户添加</a></li>  -->
       </ul> </li> 

@endsection

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>商品详情信息添加</span></div>
  <div class="mws-panel-body no-padding">

	@if (count($errors) > 0)
		   <div class="mws-form-message error">
		        <ul style="list-style:none">
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
       <form class="mws-form" action="/admin/goods/rinsert" method="post" enctype="multipart/form-data" >
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label class="mws-form-label">商品名:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="goodsname" value="{{$row->goodsname}}" disabled="disabled"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">商品ID:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="goodsname" value="{{$row->id}}" disabled="disabled"></div>
        </div>
  
            <input type="hidden" class="small"  name="goodsid" value="{{$row->id}}">
        <div class="mws-form-row">
          <label class="mws-form-label">商品颜色:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="color" value=""></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片缩略图1:</label>
          <div class="mws-form-item" style="width:400px">
            <input type="file" name="img1" class="small"  ></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片缩略图2:</label>
          <div class="mws-form-item" style="width:400px">
            <input type="file" name="img2" class="small"  ></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片缩略图3:</label>
          <div class="mws-form-item" style="width:400px">
            <input type="file" name="img3" class="small"  ></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片缩略图4:</label>
          <div class="mws-form-item" style="width:400px">
            <input type="file" name="img4" class="small"  ></div>
        </div>
    </div>
        

	
      <div class="mws-button-row">
      	{{ csrf_field() }}
        <input type="submit" value="提交" class="btn btn-danger">
        <input type="reset" value="重置" class="btn "></div>
    </form>
  </div>
</div>





@endsection