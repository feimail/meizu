@extends('layout.index')


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>购物车添加</span>
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

    	<form action="/admin/trade/insert" method='post' class="mws-form">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户id:</label>
    				<div class="mws-form-item">
    					<input type="text" name='userid'  class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品id</label>
    				<div class="mws-form-item">
    					<input type="text" name='goodid'class="small">
    				</div>
    			</div>  
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品颜色</label>
    				<div class="mws-form-item">
    					<input type="text" name='color'class="small">
    				</div>
    			</div>  
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品数量</label>
    				<div class="mws-form-item">
    					<input type="number" name='num'  class="small">
    				</div>
    			</div> 
                <div class="mws-form-row">
                    <label class="mws-form-label">商品价格</label>
                    <div class="mws-form-item">
                        <input type="text" name='price'  class="small">
                    </div>
                </div> 
                <div class="mws-form-row">
                    <label class="mws-form-label">商品总价</label>
                    <div class="mws-form-item">
                        <input type="number" name='allprice' class="small">
                    </div>
                </div>    			
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