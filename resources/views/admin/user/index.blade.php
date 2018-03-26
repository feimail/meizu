@extends('./layout.index')

@section('content')
<div class="mws-panel grid_8">

  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>用户列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

	<form action="/admin/user/index" method='get'>
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>显示
          <select name="num" size="1" aria-controls="DataTables_Table_1">
            <option value="10" @if(!empty($request['num']) && $request['num'] == 10)
                selected
            @endif
            >10</option>
            <option value="25" @if(!empty($request['num']) && $request['num'] == 25)
                selected
            @endif
            >25</option>
            <option value="50" @if(!empty($request['num']) && $request['num'] == 50)
                selected
            @endif
            >50</option>
            <option value="100" @if(!empty($request['num']) && $request['num'] == 100)
                selected
            @endif
            >100</option>
          </select>条数据</label>
      </div>
      <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>关键字:
          <input type="text" name= 'search' value = "{{$request['search'] or ''}}" aria-controls="DataTables_Table_1">
         </label>
         <button class='btn btn-info'>点击搜索</button>
      </div>
	</form>

      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 185px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 239px;" aria-label="Browser: activate to sort column ascending">用户名</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 239px;" aria-label="Browser: activate to sort column ascending">头像</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 209px;">邮箱</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 148px;">手机号</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 157px;" aria-label="Engine version: activate to sort column ascending">状态</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 115px;" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($row as $k => $v)
          <tr class="@if($k % 2 == 0)
					even
					@else 
					odd
					@endif
          ">
            <td class="  sorting_1">{{$v->id}}</td>
            <td class=" ">{{$v->username}}</td>
            <td class=" "><img src="{{$v->pic}}" width="80" height="80"></td>
            <td class=" ">{{$v->email}}</td>
            <td class=" ">{{$v->phone}}</td>
            <!-- <td class=" ">{{func($v->status)}}</td> -->
             <td class=" ">
              <input cid="{{$v->id}}" class="ibutton" type="checkbox" @if($v->status) checked="checked" @endif>
              </td>

            <td class=" "><a href="/admin/user/edit?id={{$v->id}}" ><button type="button" class="btn btn-primary btn-small"style="float:left;font-size:9px;">修改</button></a><a href="/admin/user/delete?id={{$v->id}}" ><button type="button" class="btn btn-danger btn-small"style="font-size:9px;">删除</button></a></td>
          </tr>
		@endforeach
        </tbody>
      </table>
      <div class="dataTables_paginate paging_full_numbers" id="pages">

       {!! $row->appends($request)->render()!!}    
    </div>
  </div>
</div>
@endsection

@section('css')

           <!-- Plugin Stylesheets first to ease overrides -->
    <link rel="stylesheet" type="text/css" href="/back/plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/custom-plugins/picklist/picklist.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/plugins/select2/select2.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/plugins/ibutton/jquery.ibutton.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/plugins/cleditor/jquery.cleditor.css" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/back/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/back/css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/back/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/back/jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/back/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/back/css/themer.css" media="screen">
@endsection

@section('js')

  <!-- JavaScript Plugins -->
    <script src="/back/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/back/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/back/js/libs/jquery.placeholder.min.js"></script>
    <script src="/back/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/back/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/back/jui/jquery-ui.custom.min.js"></script>
    <script src="/back/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/back/jui/js/globalize/globalize.js"></script>
    <script src="/back/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/back/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/back/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/back/plugins/select2/select2.min.js"></script>
    <script src="/back/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/back/plugins/validate/jquery.validate-min.js"></script>
    <script src="/back/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/back/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/back/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/back/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/back/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/back/bootstrap/js/bootstrap.min.js"></script>
    <script src="/back/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/back/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/back/js/demo/demo.formelements.js"></script>

    <script type="text/javascript">
  
    //动态修改分类的状态
    $(function(){
    $('.ibutton-container').click(function(){
      //获取状态
      var status = $(this).find('input')[0].checked ? 1 : 0;
      var id = $(this).find('input').attr('cid');

        // console.log(status);
        // return;
      //发送
       $.get('/admin/user/ajaxupdate', {status: status, id: id}, function(data){
          if(data == '1'){
            alert('更新成功');
          }else{
            alert('更新失败');
          }
        });
      })
    })

     
    </script>

@endsection