@extends('layout.index')


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>订单操作</span>
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

    	<form action="/admin/order/update?id={{$row->id}}" method='post' class="mws-form">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">订单id:</label>
    				<div class="mws-form-item">
    					<input type="text" name='userid' disabled value="{{$row->id}}" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品id</label>
    				<div class="mws-form-item">
    					<input type="text" name='goodid' disabled value="{{$row->userid}}" class="small">
    				</div>
    			</div>  
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名称</label>
    				<div class="mws-form-item">
    					<input type="text" name='color' disabled value="{{$row->goodsname}}" class="small">
    				</div>
    			
                 
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item">
                                                            
                        <input type="radio" id="0" name="status" value="0" @if($row->status=="0") checked @endif >未发货
                        <input type="radio" id="1" name="status" value="1" @if($row->status=="1") checked @endif>已发货
                        <input type="radio" id="2" name="status" value="2" @if($row->status=="2") checked @endif>收货
                        
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