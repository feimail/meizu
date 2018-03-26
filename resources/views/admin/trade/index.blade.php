@extends('layout.index')

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
      <span><i class="icon-table"></i> Simple Table</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>userid</th>
                    <th>goodsid</th>
                    <th>color</th>
                    <th>number</th>
                    <th>price</th>
                    <th>allprice</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($row as $k=>$v)
                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->userid}}</td>
                    <td>{{$v->goodsid}}</td>
                    <td>{{$v->color}}</td>
                    <td>{{$v->number}}</td>
                    <td>{{$v->price}}</td>
                    <td>{{$v->allprice}}</td>
                    <td>
                    <!-- <a href="/admin/trade/update">修改</a> -->
                    <a href="/admin/trade/delete?id={{$v->id}}">删除购物车</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
