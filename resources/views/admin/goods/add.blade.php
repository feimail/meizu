@extends('./layout.index')



@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>商品添加</span></div>
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
       <form class="mws-form" action="/admin/goods/insert" method="post" enctype="multipart/form-data">
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label class="mws-form-label">商品名:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="goodsname" value="{{old('goodsname')}}"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">商品描述:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="desc" value="{{old('desc')}}"></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">图片主图:</label>
          <div class="mws-form-item" style="width:400px">
            <input type="file" name="img" class="small"  ></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">父级分类:</label>
          <div class="mws-form-item">
            <select class="small" name="pid">
                <option value="0">请选择</option>
                @foreach($row as $k=>$v)
        		<option value="{{$v->id}}">{{$v->name}}</option>
        		@endforeach
            </select>
          </div>
        </div>

        <div class="mws-form-row">
          <label class="mws-form-label">价格:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="price" value="{{old('price')}}"></div>
        </div>
        <div class="mws-form-row">
        <label class="mws-form-label">网络类型:</label>
        <div class="mws-form-item">
            <input type="text" class="small" name="web" value="{{old('web')}}"></div>
        </div>
    
        <div class="mws-form-row">
          <label class="mws-form-label">套餐:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="taocan" value="{{old('taocan')}}"></div>
        </div>

	<div class="mws-form-row">
        <label class="mws-form-label">内存大小:</label>
        <div class="mws-form-item">
            <input type="text" class="small" name="type" value="{{old('type')}}"></div>
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