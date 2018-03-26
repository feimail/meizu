@extends('./layout.index')

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>友情链接修改</span>
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

    	<form action="/admin/you/update" method='post' class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">网站名称:</label>
    				<div class="mws-form-item">
    					<input type="text" name='name' value = "{{ $row->name}}" class="small">
    				</div>
    			</div>
    		
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="url" value="{{ $row->url }}">
                    </div>
                </div>
            </div>
    	</div>
    		<div class="mws-button-row">
    			{{ csrf_field() }}
                <input type="hidden" name = 'id' value="{{ $row->id }}">
    			<input type="submit" class="btn btn-danger" value="修改">
    			<input type="reset" class="btn " value="重置">
    		</div>
    	</form>
    </div>    	
</div>
@endsection