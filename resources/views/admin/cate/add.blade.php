@extends('./layout.index')

@section('content')
  <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>分类管理</span>
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
                    	<form class="mws-form" action="/admin/cate/insert"method="post">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">分类名称</label>
                    				<div class="mws-form-item">
                    					<input class="small" name='name' type="text">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">父级分类</label>
                    				<div class="mws-form-item">
                    					<select class="small" name='pid'>
                    						<option value="0">请选择</option>
                    						@foreach($row as $k=>$v)
                                                <option value="{{$v->id}}">{{ $v->name}}</option>

                                            @endforeach
                    					</select>
                    				</div>
                    			</div>

                                <div class="mws-form-row">
                                    <label class="mws-form-label">状态</label>
                                    <div class="mws-form-item clearfix">
                                         <ul class="mws-form-list inline">
                                            <li><input type="radio" name="status" value="1" checked="checked"> <label>启用</label></li>
                                            <li><input type="radio" name="status" value="0"> <label>禁用</label></li>
                                        </ul>
                                    </div>
                                </div>`
                    		</div>
                    		<div class="mws-button-row">
                               {{ csrf_field() }}
                    			<input value="提交" class="btn btn-danger" type="submit">
                    			<input value="重置" class="btn " type="reset">
                    		</div>
                    	</form>
                    </div>    	
                </div>


@endsection