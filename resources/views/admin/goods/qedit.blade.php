@extends('./layout.index')



@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>商品答疑修改</span></div>
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
       <form class="mws-form" action="/admin/goods/qupdate" method="post" enctype="multipart/form-data">
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label class="mws-form-label">商品名:</label>
          <div class="mws-form-item">
            <input type="text" class="small"  name="goodsname" value="{{$res->goodsname}}" disabled=""></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">用户名:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="username" value="{{$res->username}}" disabled=""></div>
        </div>

        <div class="mws-form-row">
          <label class="mws-form-label">咨询问题:</label>
          <div class="mws-form-item">
            <input type="text" class="small" name="question" value="{{$res->question}}" disabled=""></div>
        </div>
        <div class="mws-form-row">
          <label class="mws-form-label">客服答复:</label>
          <div class="mws-form-item">
            <textarea class="small" cols="" rows="" name="answer" value="{{$res->answer}}"></textarea>
          </div>
        </div>
        
        <!-- 隐藏域传id -->
        <input type="hidden" name="id" value="{{$res->id}}">
      <div class="mws-button-row">
      	{{ csrf_field() }}
        <input type="submit" value="提交" class="btn btn-danger">
        <input type="reset" value="重置" class="btn "></div>
    </form>
  </div>
</div>





@endsection