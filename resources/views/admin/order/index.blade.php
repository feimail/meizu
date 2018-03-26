@extends('layout.index')

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
      <span><i class="icon-table"></i>订单</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>用户id</th>
                    <th>地址</th>
                    <th>下单时间</th>
                    <th>商品名</th>
                    <th>商品id</th>
                    <th>单价</th>
                    <th>商品图片</th>
                    <th>订单号</th>
                    <th>总价</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>

                 @foreach($row as $k=>$v)
                    <tr>
                    <th>{{$v->id}}</th>
                    <th>{{$v->userid}}</th>
                    <th>{{$v->address}}</th>
                    <th>{{$v->time}}</th>
                    <th>{{$v->goodsname}}</th>
                    <th>{{$v->goodsid}}</th>
                    <th>{{$v->price}}</th>
                    <th> <img width="100px" src="{{$v->goodsdetail}}" alt=""> </th>
                    <th>{{$v->number}}</th>                   
                    <th>{{$v->totalprice}}</th>
                    <th>{{funcs($v->status)}}</th>
                    <th>
                    <a href="/admin/order/edit?id={{$v->id}}">操作订单</a>
                    </th>
                    </tr>
                @endforeach
            </thead>
            <tbody>
           
            </tbody>
        </table>
    </div>
</div>
@endsection

