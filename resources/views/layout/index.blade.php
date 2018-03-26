<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
 <!--<![endif]-->
 <head> 
  <meta charset="utf-8" /> 

  @section('css')
  <!-- Viewport Metatag --> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0" /> 
  <!-- Plugin Stylesheets first to ease overrides --> 
  <link rel="stylesheet" type="text/css" href="/back/plugins/colorpicker/colorpicker.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/custom-plugins/wizard/wizard.css" media="screen" /> 
  <!-- Required Stylesheets --> 
  <link rel="stylesheet" type="text/css" href="/back/bootstrap/css/bootstrap.min.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/fonts/ptsans/stylesheet.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/fonts/icomoon/style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/mws-style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/icons/icol16.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/icons/icol32.css" media="screen" /> 
  <!-- Demo Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/back/css/demo.css" media="screen" /> 
  <!-- jQuery-UI Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/back/jui/css/jquery.ui.all.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/jui/jquery-ui.custom.css" media="screen" /> 
  <!-- Theme Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/back/css/mws-theme.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/back/css/themer.css" media="screen" /> 

  @show
  <style type="text/css">
    body, 
#mws-container
{
    background-image:url('/back/images/core/bg/paper.png');
}

#mws-sidebar, 
#mws-sidebar-bg, 
#mws-header, 
.mws-panel .mws-panel-header, 
#mws-login, 
#mws-login .mws-login-lock, 
.ui-accordion .ui-accordion-header, 
.ui-tabs .ui-tabs-nav, 
.ui-datepicker, 
.fc-event-skin, 
.ui-dialog .ui-dialog-titlebar, 
.jGrowl .jGrowl-notification, .jGrowl .jGrowl-closer, 
#mws-user-tools .mws-dropdown-menu .mws-dropdown-box, 
#mws-user-tools .mws-dropdown-menu.open .mws-dropdown-trigger
{
    background-color:#192a54;
}

#mws-header
{
    border-color:#88a9eb;
}

.mws-panel .mws-panel-header span, 
#mws-navigation ul li.active a, 
#mws-navigation ul li.active span, 
#mws-user-tools #mws-username, 
#mws-navigation ul li .mws-nav-tooltip, 
#mws-user-tools #mws-user-info #mws-user-functions #mws-username, 
.ui-dialog .ui-dialog-title, 
.ui-state-default, 
.ui-state-active, 
.ui-state-hover, 
.ui-state-focus, 
.ui-state-default a, 
.ui-state-active a, 
.ui-state-hover a, 
.ui-state-focus a
{
    color:#8affe2;
    text-shadow:0 0 6px rgba(157, 224, 245, 0.5);
}

#mws-searchbox .mws-search-submit, 
.mws-panel .mws-panel-header .mws-collapse-button span, 
.dataTables_wrapper .dataTables_paginate .paginate_disabled_previous, 
.dataTables_wrapper .dataTables_paginate .paginate_enabled_previous, 
.dataTables_wrapper .dataTables_paginate .paginate_disabled_next, 
.dataTables_wrapper .dataTables_paginate .paginate_enabled_next, 
.dataTables_wrapper .dataTables_paginate .paginate_active, 
.mws-table tbody tr.odd:hover td, 
.mws-table tbody tr.even:hover td, 
.ui-slider-horizontal .ui-slider-range, 
.ui-slider-vertical .ui-slider-range, 
.ui-progressbar .ui-progressbar-value, 
.ui-datepicker td.ui-datepicker-current-day, 
.ui-datepicker .ui-datepicker-prev, 
.ui-datepicker .ui-datepicker-next, 
.ui-accordion-header .ui-accordion-header-icon, 
.ui-dialog-titlebar-close
{
    background-color:#88a9eb;
}
#pages li{
    background-color: #444444;
    border-left: 1px solid rgba(255, 255, 255, 0.15);
    border-right: 1px solid rgba(0, 0, 0, 0.5);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(255, 255, 255, 0.15) inset;
    color: #fff;
    cursor: pointer;
    display: block;
    float: left;
    font-size: 12px;
    height: 20px;
    line-height: 20px;
    outline: medium none;
    padding: 0 10px;
    text-align: center;
    text-decoration: none;
}
#pages .active{
    background-color: #88a9eb;
    background-image: none;
    border: medium none;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.25) inset;
    color: #323232;
}
#pages .pagination a{
     color: #fff;
}
#pages .pagination{
  margin: 0px;
}


  </style>
  <title>后台首页</title> 
 </head> 
 <body>

  <!-- Header --> 
  <div id="mws-header" class="clearfix"> 
   <!-- Logo Container --> 
   <div id="mws-logo-container"> 
    <!-- Logo Wrapper, images put within this wrapper will always be vertically centered --> 
    <div id="mws-logo-wrap"> 
     <img src="/back/images/mws-logo.png" alt="mws admin" /> 
    </div> 
   </div> 
   <!-- User Tools (notifications, logout, profile, change password) --> 
   <div id="mws-user-tools" class="clearfix"> 
    <!-- Notifications --> 
    <div id="mws-user-notif" class="mws-dropdown-menu"> 
     <a href="/back/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a> 
     <!-- Unread notification count --> 
     <span class="mws-dropdown-notif">35</span> 
     <!-- Notifications dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-notifications"> 
        <li class="read"> <a href="/back/#"> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="/back/#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="/back/#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="/back/#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="/back/#">View All Notifications</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- Messages --> 
    <div id="mws-user-message" class="mws-dropdown-menu"> 
     <a href="/back/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a> 
     <!-- Unred messages count --> 
     <span class="mws-dropdown-notif">35</span> 
     <!-- Messages dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-messages"> 
        <li class="read"> <a href="/back/#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="/back/#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="/back/#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="/back/#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="/back/#">View All Messages</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- User Information and functions section --> 
    <div id="mws-user-info" class="mws-inset"> 
     <!-- User Photo --> 
     <div id="mws-user-photo"> 
      <img src="{{session('pic')}}" alt="User Photo" /> 
     </div> 
     <!-- Username and Functions --> 
     <div id="mws-user-functions"> 
      <div id="mws-username">
       Hello, {{session('username')}}
      </div> 
      <ul> 
       <li><a href="/back/#"> </a></li> 
       <li><a href="/back/#"> </a></li>
       <li><a href="/admin/login/logout">退出登录</a></li>
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- Start Main Wrapper --> 
  <div id="mws-wrapper"> 
   <!-- Necessary markup, do not remove --> 
   <div id="mws-sidebar-stitch"></div> 
   <div id="mws-sidebar-bg"></div> 
   <!-- Sidebar Wrapper --> 
   <div id="mws-sidebar"> 
    <!-- Hidden Nav Collapse Button --> 
    <div id="mws-nav-collapse"> 
     <span></span> 
     <span></span> 
     <span></span> 
    </div> 
    <!-- Searchbox --> 
    <div id="mws-searchbox" class="mws-inset"> 
     <form action="typography.html"> 
      <input type="text" class="mws-search-input" placeholder="Search..." /> 
      <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button> 
     </form> 
    </div> 
    <!-- Main Navigation --> 
    <div id="mws-navigation"> 
     <ul> 
	  @section('xiugai')
      <li> <a href="/back/#"><i class="icon-users"></i>用户信息</a> 
       <ul class="closed"> 
        <li><a href="/admin/user/index">用户列表</a></li>
        <li><a href="/admin/user/add">用户添加</a></li> 
       </ul> </li> 
       
     </ul>  

     <ul >
        <li>
            <a href="#"><i class="icon-th-list"></i>分类管理</a>
            <ul class='closed'>
                <li><a href="/admin/cate/index">类别列表</a></li>
                <li><a href="/admin/cate/add">类别添加</a></li>
                
            </ul>
        </li>                 
    </ul>
	<ul> 
      <li> <a href="/back/#"><i class="icon-apple-2"></i></i>商品管理</a> 
       <ul class="closed"> 
        <li><a href="/admin/goods/index">商品列表</a></li>
        <li><a href="/admin/goods/add">商品添加</a></li> 
        <li><a href="/admin/goods/qindex">商品答疑</a></li> 
       </ul> </li> 
       
     </ul> 


   </ul> 
      <ul >
        <li>
            <a href="#"><i class="icon-shopping-cart"></i>购物车</a>
            <ul class='closed'>
                <!-- <li><a href="/admin/config/add">配置添加</a></li> -->
                <li><a href="/admin/trade/index">购物车</a></li>
            </ul>
        </li>
    </ul>
     <ul >
        <li>
            <a href="#"><i class="icon-list-2"></i>订单</a>
            <ul class='closed'>
                <!-- <li><a href="/admin/config/add">配置添加</a></li> -->
                <li><a href="/admin/order/index">订单列表</a></li>
            </ul>
        </li>
    </ul>


    <ul >
        <li>
            <a href="#"><i class="icon-cogs"></i>配置管理</a>
            <ul class='closed'>
                <!-- <li><a href="/admin/config/add">配置添加</a></li> -->
                <li><a href="/admin/config/index">配置列表</a></li>
            </ul>
        </li>
    </ul>
    <ul >
        <li>
            <a href="#"><i class="icon-text-height"></i>友情管理</a>
            <ul class='closed'>
                <li><a href="/admin/you/index">友情列表</a></li>
                <li><a href="/admin/you/add">友情添加</a></li>
                
            </ul>
        </li>    
        @show             
    </div> 
   </div> 
   <!-- Main Container Start --> 
   <div id="mws-container" class="clearfix"> 
    <!-- Inner Container Start --> 
    <div class="container"> 
       @if(session('success'))
          <div class="mws-form-message success">
             {{session('success')}}
          </div>
       @endif
       @if(session('error'))
           <div class="mws-form-message error">
               {{session('error')}}
           </div>
    @endif
     @section('content')
      

     @show
     <!-- Panels End --> 
    </div> 
    <!-- Inner Container End --> 
    <!-- Footer --> 
    <div id="mws-footer">
      Copyright Your Website 2012. All Rights Reserved. 
    </div> 
   </div> 
   <!-- Main Container End --> 
  </div> 
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
  <!-- Plugin Scripts --> 
  <script src="/back/plugins/datatables/jquery.dataTables.min.js"></script> 
  <!--[if lt IE 9]>
    <script src="/back/js/libs/excanvas.min.js"></script>
    <![endif]--> 
  <script src="/back/plugins/flot/jquery.flot.min.js"></script> 
  <script src="/back/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script> 
  <script src="/back/plugins/flot/plugins/jquery.flot.pie.min.js"></script> 
  <script src="/back/plugins/flot/plugins/jquery.flot.stack.min.js"></script> 
  <script src="/back/plugins/flot/plugins/jquery.flot.resize.min.js"></script> 
  <script src="/back/plugins/colorpicker/colorpicker-min.js"></script> 
  <script src="/back/plugins/validate/jquery.validate-min.js"></script> 
  <script src="/back/custom-plugins/wizard/wizard.min.js"></script> 
  <!-- Core Script --> 
  <script src="/back/bootstrap/js/bootstrap.min.js"></script> 
  <script src="/back/js/core/mws.js"></script> 
  <!-- Themer Script (Remove if not needed) --> 
  <script src="/back/js/core/themer.js"></script> 
  <!-- Demo Scripts (remove if not needed) --> 
  <script src="/back/js/demo/demo.dashboard.js"></script>  

  @show
 </body>
</html>