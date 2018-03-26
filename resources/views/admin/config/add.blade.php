@extends('./layout.index')

@section('content')

   <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>配置管理</span>
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
                    	<form class="mws-form" action="/admin/config/insert"method="post" enctype='multipart/form-data'>
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">网站标题</label>
                    				<div class="mws-form-item">
                    					<input class="small" name='title' type="text">
                    				</div>
                    			</div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">网站版权</label>
                                    <div class="mws-form-item">
                                        <input class="small" name='copyright' type="text">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">注册号</label>
                                    <div class="mws-form-item">
                                        <input class="small" name='registerid' type="text">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">经营许可证</label>
                                    <div class="mws-form-item">
                                        <input class="small" name='allow' type="text">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">ICP备案号</label>
                                    <div class="mws-form-item">
                                        <input class="small" name='number' type="text">
                                    </div>
                                </div>
                                 
                                <div class="mws-form-row">
                                  <label class="mws-form-label">头部logo</label>
                                  <div class="mws-form-item" style="width:400px">
                          
                                    <input type="file" name="headlogo" class="small"  ></div>
                                </div>
                                
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">网站描述</label>
                                    <div class="mws-form-item">
                                        <textarea rows="" cols="" class="small" name="description"></textarea>
                                    </div>
                                </div>
                    			
                                <div class="mws-form-row">
                                    <label class="mws-form-label">状态</label>
                                    <div class="mws-form-item clearfix">
                                         <ul class="mws-form-list inline">
                                            <li><input type="radio" name="status" value="1" checked="checked"> <label>正常</label></li>
                                            <li><input type="radio" name="status" value="0"> <label>维护</label></li>
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