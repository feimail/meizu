@extends('./layout.index')


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
		
        @if (count($errors) > 0)
		   <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form action="/admin/user/insert" method='post' class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名:</label>
    				<div class="mws-form-item">
    					<input type="text" name='username' value="{{old('username')}}" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">密码:</label>
    				<div class="mws-form-item">
    					<input type="password" name='password'class="small">
    				</div>
    			</div>  
    			<div class="mws-form-row">
    				<label class="mws-form-label">确认密码:</label>
    				<div class="mws-form-item">
    					<input type="password" name='repassword'class="small">
    				</div>
    			</div>  
                <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="email" value="{{old('email')}}">
                    </div>
                </div>
                </div>
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">手机号</label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="phone">
                        </div>
                    </div>
                </div> 		

                <div class="mws-form-row">
                      <label class="mws-form-label">头像</label>
                      <div class="mws-form-item" style="width:400px">
              
                        <input type="file" name="pic" class="small"  ></div>
                </div>

                 <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                         <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1" checked="checked"> <label>管理员</label></li>
                            <li><input type="radio" name="status" value="0"> <label>普通用户</label></li>
                        </ul>
                    </div>
                </div>`


        	</div>
    		<div class="mws-button-row">
    			{{ csrf_field() }}

    			<input type="submit" class="btn btn-danger" value="提交">
    			<input type="reset" class="btn " value="重置">
    		</div>
    	</form>
    </div>    	
</div>
@endsection