@extends('./layout.index')
@section('content')
 <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 配置管理</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>网站标题</th>
                                    <th>网站版权</th>
                                    <th>注册号</th>
                                    <th>经营许可证</th>
                                    <th>ICP备案号</th>
                                    <th>网站logo</th>
                                    <th>网站描述</th>
                                    <th>网站开关</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $row as $k=>$v)
                                <tr>
                                   
                                    <td>{{ $v->title}}</td>
                                    <td>{{ $v->copyright}}</td>
                                    <td>{{ $v->registerid}}</td>
                                    <td>{{ $v->allow}}</td>
                                    <td>{{ $v->number}}</td>
                                    <td><img src="{{$v->headlogo}}" style="width:100px;"></td>
                                    <td>{{ $v->description}}</td>
                                   <td class=" ">
                                      <input cid="{{$v->id}}" class="ibutton" type="checkbox" @if($v->status) checked="checked" @endif>
                                      </td>
                                    <td class=" "><a href="/admin/config/edit?id={{$v->id}}" ><button type="button" class="btn btn-primary btn-small"style="float:left;font-size:9px;">更改配置</button></a></td>
                                   
                                    
                                </tr>
                           @endforeach     
                            </tbody>
                        </table>
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
      //发送
      $.get('/admin/config/ajaxupdate', {status: status, id: id}, function(data){
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