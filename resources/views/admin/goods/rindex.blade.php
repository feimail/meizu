@extends('./layout.index')

@section('xiugai')
  <li> <a href="/back/#"><i class="icon-calculate"></i>商品详情信息</a> 
       <ul class=""> 
        <li><a href="/admin/goods/rindex?id={{$res->id}}">详情信息列表</a></li>
        <!-- <li><a href="/admin/goods/radd?id={{$res->id}}">详情信息添加</a></li>  -->
       </ul> </li> 

@endsection
@section('content')
	<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>商品详情列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    
    
      
          
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">ID</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">商品名</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">商品ID</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">商品颜色</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">商品缩略图</th>
            
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作 </th>
          
            </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
         @foreach($result as $k=>$v)
         <tr class="<?php echo $k%2==0?'even':'odd' ?>">
            
            <td class=" sorting_1">{{$v->id}}</td>
            
            <td class=" ">{{$res->goodsname}}</td>
            
            <td class=" ">{{$res->id}}</td>
            <td class=" ">{{$v->color}}</td>

            <td class=" ">@foreach($v->pic as $key=>$value) <img src="{{$value}}" width="40px" height="40px"> @endforeach</td>
            <td class=" "><a href="/admin/goods/redit?id={{$v->id}}" style="color:black"><button class="btn btn-success btn-small" type="button">修改</button></a>&nbsp;<a href="/admin/goods/rdelete?id={{$v->id}}" style="color:black"><button class="btn btn-danger btn-small" type="button">删除</button></a></td>
            
            </tr>
            @endforeach
        </tbody>
      </table>
      
      <div class="dataTables_paginate paging_full_numbers" id="pages">
       <a href="/admin/goods/index"><button class="btn btn-inverse" type="button">返回</button></a>
    </div>
  </div>
</div>
@endsection