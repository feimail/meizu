@extends('./layout.index')

@section('content')
  <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>分类管理</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/cate/update"method="post">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">分类名称</label>
                    				<div class="mws-form-item">
                    					<input class="small" name='name' value="{{$list->name}}" type="text">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">父级分类</label>
                    				<div class="mws-form-item">
                    					<select class="small" name='pid'>
                    						<option value="0">请选择</option>
                    					@foreach($row as $k=>$v)
                                            <option value="{{ $v->id}}"

                                            @if($v->id == $list->pid)

                                            selected
                                            @endif
                                            >{{$v->name}}</option>

                                         @endforeach
                    					</select>
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                               {{ csrf_field() }}
                               <input type="hidden"name="id" value="{{$list->id }}">
                    			<input value="修改" class="btn btn-danger" type="submit">
                    			<input value="重置" class="btn " type="reset">
                    		</div>
                    	</form>
                    </div>    	
                </div>


@endsection