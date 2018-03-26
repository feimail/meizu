@extends('./layout.index')



@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>商品信息修改</span></div>
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
       <form class="mws-form" action="/admin/goods/update" method="post" enctype="multipart/form-data">
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label class="mws-form-label">商品名:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="goodsname" value="{{$result->goodsname}}"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">商品描述:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="desc" value="{{$result->desc}}"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片主图:</label>
          <div class="mws-form-item" style="width:400px">
          <img src="{{$result->img}}" width="80" height="80">
            <input type="file" name="img" class="small" value="{{$result->img}}" ></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">父级分类:</label>
          <div class="mws-form-item">
            <select class="small" name="pid">
                <option value="0" >请选择</option>
                @foreach($row as $k=>$v)
        		<option value="{{$v->id}}" @if($result->pid==$v->id)
                selected
            @endif
            >{{$v->name}}</option>
        		@endforeach
            </select>
          </div>
        </div>

        <div class="mws-form-row">
          <label class="mws-form-label">价格:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="price" value="{{$result->price}}"></div>
        </div>
        <div class="mws-form-row">
        <label class="mws-form-label">网络类型:</label>
        <div class="mws-form-item">
            <input type="text" class="small" name="web" value="{{$result->web}}"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">套餐:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="taocan" value="{{$result->taocan}}"></div>
        </div>

	<div class="mws-form-row">
        <label class="mws-form-label">内存大小:</label>
       <div class="mws-form-item">
            <input type="text" class="small" name="type" value="{{$result->type}}"></div>
        </div>
    </div>
        <!-- 隐藏域传id -->
        <input type="hidden" name="id" value="{{$result->id}}">
        <!-- 未修改前的图片 -->
        <input type="hidden" name="imgs" value="{{$result->img}}">
      <div class="mws-button-row">
      	{{ csrf_field() }}
        <input type="submit" value="提交" class="btn btn-danger">
        <input type="reset" value="重置" class="btn "></div>
    </form>
  </div>
</div>





@endsection