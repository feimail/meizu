@extends('./layup.index')

@section('content')
<head>
	
	<title>账号管理</title>
	<link href="/qiantai/ucenter/css/base.css" type="text/css" rel="Stylesheet"/>
	<link href="/qiantai/ucenter/css/head.css" type="text/css" rel="Stylesheet"/>
	<link href="/qiantai/ucenter/css/cycode.css" rel="stylesheet"/>
	<link href="/qiantai/ucenter/css/actmanage.css" type="text/css" rel="Stylesheet"/>

</head>
<body>
	<div  class="content">
		

<input type='hidden' value=""/>


		<div class="flymeContent">
			

<style type="text/css">
	
	.navWrap{
		height: 58px;
		border-bottom: #e4e7e9 1px solid;
	}
	.navWrap .nav{
		display: block;
		float: left;
		line-height: 58px;
	}
	.navWrap .nav li{
		position: relative;
		display: inline-block;
		margin-right: 40px;
		width: 100px;
		height: 100%;
		float: left;
	}
	.navWrap .nav li a{
		display: inline-block;
		width: 100%;
		height: 56px;
		font-size: 16px;
		text-align: center;
	}
	.navWrap .nav .current{
		margin: 0px auto;
		height: 2px;
		width: 100px;
		overflow: hidden;
		background-color: #1daeed;
	}

	.xianshixingming{
		display: none;

	}
	.xianshimima{
		display: none;
	}
	


</style>
<div id='navWrap' class="navWrap">
	<ul class="nav">
		<li id="accountManage"><a href="/uc/webjsp/member/detail" class="linkABlue">个人中心</a><div class='current'></div></li>
		
	</ul>
</div>
<div class='clear'></div>

			
				

				
						<!-------------------------------------------->
				<div class="topWrap">
				<form action="/index/ucenter/update" method='post'  id="uploadForm" name="uploadForm" enctype="multipart/form-data">
				<div class="top-leftWrap">

					<input type="hidden" name="id" value="{{$row[0]->id}}">
					<img src="{{$row[0]->pic}}" id="userImg">
					<a href="#" class="modifyIconTip modify" id="modifyIconTip"><input type="file" class="small" name="pic">编辑头像<input type="submit" class="btn btn-danger" value="修改"></a>
					
					<a class="modifyIconTip-bg"></a>
					<!-- <input type="submit" class="btn btn-danger" value="修改"> -->
				</div>
					{{ csrf_field() }}
				</form>
				<!-- <div class="mws-form-row">
                    <label class="mws-form-label">头像</label>
                    <div class="mws-form-item">
                    <img src="{{$row[0]->pic}}" width="100px" alt="">
                        <input type="file" class="small" name="pic">
                    </div>
                </div> -->
				<div class="top-rightWrap">
					<div class="lineWrap nickname" id="nickNameTitle" style="display: block;">
						<label id="nickName">
						{{$row[0]->username}}
						</label>
						<!------------         笔帽图案             ------------>
						<a class="pointer modify" id="nickNameEdite"><i class="i_icon"></i></a>

						
						
					</div>
					<!------  ------   修改姓名处   ------  ------>
					<div  class="xianshixingming" >
						<form action="/index/ucenter/update" method='post' style="display:inline" novalidate="novalidate"  >
							<input type="hidden" name="id" value="{{$row[0]->id}}">
							<div class="lineWrap">
								<input type="text" class="normalInput" name="username" value="">
							</div>
							<div class="clear"></div>
							<div id="xingmingquxiao" class="edit">
								<a  class="fullBtnBlue save_form fleft"> <input style="background:#32a5e7; color:#fff;" type="submit" value="保存"> </a>
								<a  class="fullBtnGray cancel_form fleft">取消</a>
							</div>
							{{ csrf_field() }}
							<div class="clear"></div>
						</form>
					</div>
					
					<div class="lineWrap grayTip ftop" >
						<a  class="blue modify">欢迎回来!</a>
					</div>
					
					
				
				</div>
				<div class="clear"></div>
			</div>
				<!-------------------------------------------->
				
			<div class='mainWrap'>
				
				<div class='bodyWrap'>
				<!--------------      ------   密码修改处  ------             ------------>
					<div id='pwdWrap' class='lineWrap pwdWrapTop'>
						<div class='item-right'><a href='javascript:void(0);' class='linkABlue modify' id="modifyPassword">修改</a></div>
						<div class='item-left'>密码</div>
						<div class='item-middle'></div>
						<div class='clear'></div>
					</div>
					<div id='changePasswordWrap' class='xianshimima' >
						<div class='cEmail-titleWrap'>
							<span>修改密码</span>
						</div>
						<form action="/index/ucenter/xiugai" method='post' class='cEmail-bodyWrap' enctype="application/x-www-form-urlencoded">
							<input type="hidden" name="id" value="{{$row[0]->id}}">
							
							<div class='lineWrap'>
								<div class='leftWrap'>
									<label class='leftLabel'>账号密码</label>
								</div>	
								<input type="password"  name="repassword" id="ce-u-current_pwd" class='normalInput' maxlength='16'/>
							</div>
							<div class='lineWrap'>
								<div class='leftWrap'>
									<label class='leftLabel'>新密码</label>
								</div>	
								<div class='normalInput'>
									<input type="password"  name="password" id="ce-u-new_pwd1" maxlength='16'  autocomplete="off"/>
									<!-- <input type="password" name="password" id="ce-u-new_pwd2" maxlength='16'  autocomplete="off" style='display:none'/> -->
									<a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
										<i class=""></i>
									</a>
									<div class='clear'></div>
								</div>
							</div>
							<div class='lineWrap'>
								<label class='fleft'>&nbsp;</label>
								<a href='javascript:;' class="fullBtnBlue save_form fleft" id="ce-u-pwdsave"><input style="background:#32a5e7; color:#fff;" type="submit" value="保存"></a>
								<a href='javascript:;' class="fullBtnGray cancel_form fleft" id="mimaquxiao">取消</a>
								<div class='clear'></div>
							</div>
							{{ csrf_field() }}
						</form>
					</div>
					<div id='emailWrap' class='lineWrap'>
						<!--if未验证 -->
						<div class='item-right' style='display:none;'>
							<a id='emailbindEdite' href='javascript:void(0);' class='linkABlue modify' data-type="modify">修改</a>
						</div>
						<!-- end if -->
						<!--if已验证  -->
						<div class='ialertDialogtem-right' style='display:none;'>
							<a id='emailEdite' href='javascript:void(0);' class='linkABlue modify' data-type="modify">修改</a>
						</div>
						<!-- end if -->

						<!--if-->
						<div class='item-right' >
							<a   class='linkABlue modify' data-type="bind">已绑定</a>
						</div>
						<div class='item-left'>邮箱</div>

						<div class='item-middle' id='email-item-middle2' >
							<span class='bold'>{{$row[0]->email}}</span><br>
							
						</div>
						
						<div class='clear'></div>
					</div>
					<!-- //绑定输入框 -->
					<!-- 绑定邮箱第一步，需要先验证密码 -->
					
					<!-- 绑定邮箱第二 -->					
					
					<!-- //编辑输入框，激活 -->
					
					<div  class='lineWrap'>
						<!--if-->
						<div class='item-right' >
							<a id="editMobile"  class='linkABlue modify'>已绑定</a>
						</div>
						<!-- end if -->
						<!--if-->
						<div class='item-right' style='display:none;'>
							<a id="bindMobile" href='javascript:void(0);' class='linkABlue modify'>绑定</a>
						</div>
						<!-- end if -->
						
						<div class='item-left'>手机号码</div>
						<!--if-->
						<div class='item-middle' id='telModify' >
							<span id="current_phone" class='bold'>{{$row[0]->phone}}</span><br>
							
						</div>

						<div class='clear'></div>
					</div>
					<!------ end if ------>
						
				<div  class='lineWrap'>
						<div class='item-left'>会员等级</div>
						
							<div id="questionModifyTip" class='item-right'>
								<a id="modifySafe" href='javascript:void(0);' class='linkABlue modify'></a>
							</div>
							<div id="questionSettedTip" class='item-middle'>
								<span id='tip' class='bold'>普通会员</span><br> <span
									class='grayTip'></span>
							</div>
						
				</div>
			</div>
	

		</div>
		
	
    </body>
@endsection

@section('js')
<script type="text/javascript" src="/qiantai/ucenter/jquery-1.8.3.min.js">
   
</script>
<script type="text/javascript" >
	
	//菜单隐藏
	//用户名修改
	$('.i_icon').click(function()
	{
		$('.xianshixingming').css('display','block');
	})
	
	$('#xingmingquxiao').click(function()
	{
		$('.xianshixingming').css('display','none');
	})

	//用户密码修改
	$('#modifyPassword').click(function()
	{
		$('.xianshimima').css('display','block');
	})


	$('#mimaquxiao').click(function()
	{
		$('.xianshimima').css('display','none');
	})



	</script>
@endsection