@extends('./layout.index')


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户修改</span>
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

    	<form action="/admin/user/update" method='post' class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名:</label>
    				<div class="mws-form-item">
    					<input type="text" name='username' value = "{{ $row->username}}" class="small">
    				</div>
    			</div>
    			
                <div class="mws-form-row">
                    <label class="mws-form-label">等级</label>
                    <div class="mws-form-item">
                        @if($row->status==0)
                        <input type="radio" name="level" checked value="0">普通用户
                        <input type="radio" name="level" value="1">管理员
                        @elseif($row->status==1)
                        <input type="radio" name="level"  value="0">普通用户
                        <input type="radio" name="level" checked value="1">管理员
                        @endif
                    </div>
                </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="email" value="{{$row->email}}">
                    </div>
                </div>
            </div>
             <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="phone" value="{{$row->phone}}">
                    </div>
                </div>
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">头像</label>
                    <div class="mws-form-item">
                    <img src="{{$row->pic}}" width="100px" alt="">
                        <input type="file" class="small" name="pic">
                    </div>
                </div>
            </div>
    		</div>
    		<div class="mws-button-row">
    			{{ csrf_field() }}
                <input type="hidden" name = 'id' value="{{$row->id}}">
    			<input type="submit" class="btn btn-danger" value="修改">
    			<input type="reset" class="btn " value="重置">
    		</div>
    	</form>
    </div>    	
</div>
@endsection