<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" />
	<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2" />
	<meta content="width=1080" name="viewport"/>
	<title>友情链接</title>
	<link href="/go/css5/base1.css" type="text/css" rel="Stylesheet"/>
	<!-- <link href="/go/css5/nameregister.css" type="text/css" rel="Stylesheet"/> -->
	
	<style type="text/css">
	#zhuce{background: #32A5E7; width: 342px; height: 50px; color: #fff; font-size: 20px;cursor: pointer; }
	#yanzhengma{ position: absolute; top: 5px;left: 235px;}

	.mws-form-message.error {
    background-color: #ffcbca;
    /*background-image: url(/go/images/message-error.png);*/
    border-color: #eb979b;
    color: #9b4449;
  }

 #mws-form-message.success {
    background-color: #e1f1c0;
    background-image: url(/go/images/message-success.png);
    border-color: #b5d56d;
    color: #62a426;
  }
  #yangshi{width: 300px; position: absolute;top: 200px;left: 30px;}
	</style>
</head>
<body>
	<div id='content' class="content">
		


<div class=ucSimpleHeader id="header">
	<a href="/go/http://www.meizu.com" class='meizuLogo'><i class='i_icon'></i></a>
	<div id="trigger">
		<a href="/index/gologin" id="toLogin" class='linkAGray'></a>
		<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<a href="/go/https://i.flyme.cn/register" id="toRegister" class='linkAGray'></a>
    </div>
</div>
		<div class='middle'>
		              @if (count($errors) > 0)
		   <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		 @if(session('error'))
            <div class="mws-form-message error">
                {{session('error')}}
            </div>
            @endif
			
		<!-- <input type="hidden" name="appuri" value="" id="appuri" />
		<input type="hidden" name="useruri" value="" id="useruri" />
		<input type="hidden" name="service" value="" id="service" />
		<input type="hidden" name="sid" value="" id="sid" /> -->
		</div>
	</div>
	<form  action="/index/youlian/insert" method="post">
	<br><br>
				<center>
				<h2><font color="1EB9EE">申请友情链接</font></h2><br>
				网站名称:&nbsp;&nbsp;<input type="text" name="name"><br><br><br>
				网&nbsp;&nbsp;&nbsp;&nbsp;址&nbsp;&nbsp;<input type="text" name="url"><br><br><br>
				网站描述:&nbsp;&nbsp;<textarea  id="" cols="30" rows="10" name="desc"></textarea><br><br><br>
				<input type="submit" value="提交"><br><br>

				{{ csrf_field() }}
	<div id="yangshi">
		    申请步骤：<br>
		    1.
		    请先在贵网站做好魅族商城的文字友情链接：<br>
		    链接文字：京东链接地址： www.meizu.com<br><br>
		    2.做好链接后，请在右侧填写申请信息。魅族只接受申请文字友情链接。<br><br>
		    3.
		    已经开通我站友情链接且内容健康，符合本站友情链接要求的网站，经魅族管理员审核后，可以显示在此友情链接页面。<br><br>
		    4.
		    请通过右侧提交申请，注明：友情链接申请。<br>
	    </div>

				</center>
				
			</form>
	
<div id='flymeFooter' class='footerWrap'>
	<div class='footerInner'>
		<div class='footer-layer1'>
			<div class='footer-innerLink'>
				<a href="/go/http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="/go/http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="/go/http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="/go/http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="/go/javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a>
			</div>
			<div class='footer-service'>
				<span class='service-label'>客服热线</span>
				<span class='service-num'>400-788-3333</span>
				<a id='service-online' class='service-online' href="/go/javascript:void(0);" title="在线客服">在线客服</a>
			</div>
			<div class='footer-outerLink'>
				<a class='footer-sinaMblog' href="/go/http://weibo.com/meizumobile" target="_blank"><i class='i_icon'></i></a>
				
				<a id='footer-weChat' class='footer-weChat' href="/go/javascript:void(0);" target="_blank"><i class='i_icon'></i></a>
				<a class='footer-qzone' href="/go/http://user.qzone.qq.com/2762957059" target="_blank"><i class='i_icon'></i></a>
			</div>
			<div id="globalContainer" class="footer-language_menu">
				<a href="/go/javascript:void(0)" id="i18n-link" title="English" class="ClobalItem">English</a>
	            <script>
					;(function() {
						var u = decodeURIComponent(location.href)
		                var r = /lang=([^&\s]+)/
		                var lowB = !('addEventListener' in window)
		                var addEvent = lowB ? window.attachEvent : window.addEventListener

						if(r.test(u)) u = u.replace(r, 'lang=en_US')
						else u += (~u.indexOf('?') ? '&' : '?') + 'lang=en_US'

						addEvent(lowB ? 'onload' : 'load', function() {document.getElementById('i18n-link').setAttribute('href',u)})
					}());
				</script>
			</div>
		</div>
		<div class='clear'></div>
		<div id='flymeCopyright' class="copyrightWrap">
			<div class="copyrightInner">
				<span>©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>
				<a href="/go/http://www.miitbeian.gov.cn/" class='linkAGray' target="_blank">备案号: 粤ICP备13003602号-4</a>
				<a href="/go/http://www3.res.meizu.com/static/cn/widget/footer/images/icp2_b2dcb54.jpg" class='linkAGray' target="_blank">经营许可证编号: 粤B2-20130198</a>
				<a target="_blank" href="/go/http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a>
			</div>
		</div>
	</div>
</div>
<div id="wechatPic"></div>
<script type="text/javascript">
(function() {
    var ga = document.createElement('script'), s;
    ga.type = 'text/javascript';
    ga.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
    s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>

	<script charset="utf-8" type="text/javascript" src="/go/js5/jquery-1.7.1.min.js"></script>
	<script charset="utf-8" type="text/javascript" src="/go/js3/jquery-1.8.3.min.js">  </script>
	
	<script type="text/javascript" src="/go/js5/jquery.form.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/jquery.validate.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/utils.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/flyme.elements.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/base.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/jquery.autoemail.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/nameregister.js" charset="utf-8"></script>
	<!--接入风控sh.min.js-->
    <script type="text/javascript" src="/go/js5/sh.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js5/crypp.min.js" charset="utf-8"></script>
	</body>
</html>
