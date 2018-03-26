@extends('./layup.index')

@section('content')

<link href="/qiantai/ucenter/2.css" type="text/css" rel="Stylesheet"/>
<body>
<div class="store-wrap">
    <div class="crumbs">
        <a href="">首页&gt;</a>
        <a href="/index">我的商城&gt;</a>
        <a class="active" href="">地址管理</a>
    </div>
    <div class="main clearfix">
    <div class="left-nav f-fl">
        <div class="nav-main">
            <a class="type-title" href="javascript:;"><i class="iconfont icon-orderCenter"></i>订单中心</a>
            <a class="ml " href="">我的订单</a>
            <a class="ml " href="">我的回购单</a>
            <a class="ml " href="">我的意外保</a>
            <a class="type-title" href="javascript:;"><i class="iconfont icon-selfCenter"></i>个人中心</a>
            <a class="ml active" href="">地址管理</a>
            <a class="ml " href="">我的收藏</a>
            <a class="ml " href="">消息提醒</a>
            <a class="ml " href="">建议反馈</a>
            <a class="type-title" href="javascript:;"><i class="iconfont icon-moneyCenter"></i>资产中心</a>
            <a class="ml " href="">我的优惠券</a>
            <a class="ml " href="">我的红包</a>
            <a class="ml " href="">我的回购券</a>
            <a class="type-title" href="javascript:;"><i class="iconfont icon-serverCenter"></i>服务中心</a>
            <a class="ml " href="">意外保</a>
            <a class="ml " href="">以旧换新</a>
        </div>
    </div>
        <div class="right-content f-fr">
            <div class="address-main">
                <div class="main">
                    <div class="row">
                        <span class="title rollit">新增收货地址</span>
                    </div>
                    <form action="/index/address/insert" method="post">
                        <!-- 修改地址时要用的地址id -->
                        <input type="hidden" name="uid" value="{{session('uid')}}" class="addressId">

                        <div class="content">
                            <div class="row namePhone clearfix">
                                <div class="f-fl addressName">
                                    <span>收货人姓名<i class="mark">*</i></span>
                                    <input type="text" maxlength="12" placeholder="长度不超过12个字" name="name" class="varify" >
                                </div>
                                <div class="f-fl addressPhone">
                                    <span>收货人手机号<i class="mark">*</i></span>
                                    <input type="text" maxlength="11" placeholder="请输入11位手机号" class="varify" name="phone" >
                                </div>
                            </div>
                              <!--   ----   地址    ----       -->
                            <div class="row clearfix receverAddress">
                                <span class="f-fl">收货人地址<i class="mark">*</i></span>
                                <div class="row clearfix receverAddress" >
         
		                      
		                       <select style="height:30px;width:100px;"  name="sel" id="down" style='width:100px'>
		                                                <option value="0">请选择</option>
		                                             </select> &nbsp;&nbsp;&nbsp;
		                      
		                      <select style="height:30px;width:100px;"  name="sels" id="downs" style='width:100px'>
		                                                <option value="0">请再选择</option>
		                                             </select> &nbsp;&nbsp;&nbsp;
		                      <select  style="height:30px;width:100px;" name="selx" id="downx" style='width:100px'>
		                                                <option value="0">还请选择</option>
		                                             </select><br> &nbsp;&nbsp;&nbsp;
		                   	 </div>
		                              
                   
                   		 <!-------      结束    详细        ------>
                            </div>
                            <div class="row  detailAddress">
                                <span>详细地址<i class="mark">*&nbsp;&nbsp;&nbsp;</i></span>
                                <input type="text" maxlength="50" placeholder="请输入不超过50个字的详细地址，例如：路名，门牌号" class="varify" name="dtaddress" >
                            </div>
                            <div class="opreat">
                                <!-- <label for="default">
                                    <input type="checkbox" name="isDefault" class="setDefault" id="default">设为默认
                                </label> -->
                                 <button class="saveAddress" >保存</button>
                            </div>
                        </div>
                         {{ csrf_field() }}
                    </form>
					
                    <div class="list">
                        <div class="row">
                            <div class="title">
                                <div>已有地址</div>
                                
                            </div>
                        </div>
                        <div class="listHead">
                            <span class="center w15">收货人姓名</span><span "style=width:50px" class="center w35">收货人地址</span><span class="center w25">收货人手机号</span><span class="center w25">操作</span>
                        </div>
                        @foreach($re as $k=>$v)
		     <ul  class=""><li class="">
		    <input type="hidden" name="id" value="{{$v->id}}" class="addressId">
		    <input type="hidden" value="0" class="isOld">
			
		    <span class="center w10">{{$v->name}}</span>
		    <span class="completeAddress center w30">{{getName($v->sel)}}{{getName($v->sels)}}{{getName($v->selx)}}{{$v->dtaddress}}</span>
		    <span class="center w40">{{$v->phone}}</span>
		    <span class="center w25">
		      <a href="/index/address/del?id={{$v->id}}" class="edit">删除</a>
		      <!-- <button class="delete">删除</button> -->
		    </span>
		    			
		</li>
		</ul>
				@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript" src="/qiantai/ucenter/jquery-1.8.3.min.js">
   
    </script>
    <script>
//发送ajax
        //第一级省的遍历
         $.get('/index/dress',function(data){
            //判断
            var str = "<option value='0'>请选择</option>";
            if(data)
            {   
                
                for(var i=0;i<data.length;i++)
                {
                    str += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                $('#down').html(str);
            }

        })

        //当省级下拉框失去焦点时获取去下拉框中的值(通过值[也就是省级的id来查它底下的市级城市])
    $('select[name=sel]').blur(function(){
        // $('#downs').css('display','block');
        //获取失去焦点时下拉框中的值
        var sel = $(this).val();
        // alert(sel);

        //发送ajax
        $.get('/index/dress/'+sel,function(data){

            var strs = "<option value='0'>请再选择</option>";
            if(data)
            {   
                
                for(var i=0;i<data.length;i++)
                {
                    strs += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                $('#downs').html(strs);
                // alert(12345678);
            }
            // console.log(data);
        })  
    })

    //当市级城市下拉失去焦点时
    $('select[name=sels]').blur(function(){

        var sels  = $(this).val();
        //发送ajax
        $.get('/index/dress/'+sels,function(data){
        var strx = "<option value='0'>还请选择</option>";

            if(data)
            {   
                
                for(var i=0;i<data.length;i++)
                {
                    strx += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                $('#downx').html(strx);
                // alert(12345678);
            }
            // /*alert(data);

        })
    })

    </script>
</body>

@endsection