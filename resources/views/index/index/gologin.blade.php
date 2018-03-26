




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=11;IE=10;IE=9;IE=8;" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" />
	<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2 MX3" />
	<meta content="width=1080" name="viewport"/>
	<title>登录Flyme 账号</title>
	<script type="text/javascript">
		var cdn = 'https://uc-res.meizu.com';
	</script>
	<link href="/go/css4/base.css" type="text/css" rel="Stylesheet"/>
	<link href="/go/css4/cycode.css" rel="stylesheet"/>
	<link href="/go/css4/login.css" type="text/css" rel="Stylesheet"/>
	<style type="text/css">
	#zhuce{background: #32A5E7; width: 300px; height: 50px; color: #fff; font-size: 20px;cursor: pointer; }
	#yanzhengma{ position: absolute; top: 5px;left: 235px;}

	.mws-form-message.error {
    background-color: #ffcbca;
    /*background-image: url(/go/images/message-error.png);*/
    border-color: #eb979b;
    color: #9b4449;
    width:300px;
  }


	</style>
	<!--阿里pt.js-->
	<!-- <script src="/go/js4/pt.js" data-app="ewogICJjb21tb24iOiB7CiAgICAiYXBwa2V5IjogIlJIVjIiLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAic2NlbmUiOiAiTG9naW4iLAogICAgImZvcmVpZ24iOiAwCiAgfSwKICAidWFiIjogewogICAgIkV4VGFyZ2V0IjogWwogICAgICAicHdkaWQiCiAgICBdLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAiRm9ybUlkIjogIm15X2Zvcm0iLAogICAgIkxvZ1ZhbCI6ICJ1YV9sb2ciLAogICAgIlNlbmRJbnRlcnZhbCI6IDIwLAogICAgIlNlbmRNZXRob2QiOiAzLAogICAgIk1heE1DTG9nIjogMTUwLAogICAgIk1heEtTTG9nIjogMTUwLAogICAgIk1heE1QTG9nIjogMTUwLAogICAgIk1heEdQTG9nIjogNSwKICAgICJNYXhUQ0xvZyI6IDE1MCwKICAgICJHUEludGVydmFsIjogNTAsCiAgICAiTVBJbnRlcnZhbCI6IDUwLAogICAgIk1heEZvY3VzTG9nIjogMTUwLAogICAgImlzU2VuZEVycm9yIjogMSwKICAgICJJbWdVcmwiOiAiLy9jZmQuYWxpeXVuLmNvbS9jb2xsZWN0b3IvYW5hbHl6ZS5qc29ucCIsCiAgICAiR2V0QXR0cnMiOiBbCiAgICAgICJocmVmIiwKICAgICAgInNyYyIKICAgIF0sCiAgICAiRmxhZyI6IDE5NjU1NjcKICB9LAogICJ1bWlkIjogewogICAgInRpbWVvdXQiOiAzMDAwLAogICAgInRpbWVzdGFtcCI6ICIkIXRpbWVzdGFtcCIsCiAgICAidG9rZW4iOiAiJCF0b2tlbiIsCiAgICAic2VydmljZVVybCI6ICJodHRwczovL3ludWYuYWxpcGF5LmNvbS9zZXJ2aWNlL3VtLmpzb24iLAogICAgImFwcE5hbWUiOiAiJCFhcHBOYW1lIiwKICAgICJjb250YWluZXJzIjogewogICAgICAiZmxhc2giOiAiY29udGFpbmVyIiwKICAgICAgImRjcCI6ICJjb250YWluZXIiCiAgICB9CiAgfQp9"></script> -->
</head>


<body>
	<div id='content' class="content">
		


<div class=ucSimpleHeader id="header">
	<a href="" class='meizuLogo'><i class='i_icon'></i></a>
	<div id="trigger">
		<a href="/index/gologin" id="toLogin" class='linkAGray'>登录</a>
		<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
		<a href="/index/register" id="toRegister" class='linkAGray'>注册</a>
    </div>
</div> 
    <center>
      <div>
       
		<form id=""  action="/index/doGologin" method="post" enctype="application/x-www-form-urlencoded">
			<div class="number">
				<a class="linkABlue" id="toAccountLogin" href="/go/javascript:void(0);">用户登录</a>
				<!-- <span class="register-line"></span>
				<a class="linkAGray" id="toVCodeLogin" href="/go/javascript:void(0);">验证码登录</a> -->
			</div>
			 @if(session('error'))
            <div class="mws-form-message error">
                {{session('error')}}
            </div>
            @endif
			<div class='normalInput fieldInput'>
                
                    <input type="text" name="username" id="username"  maxlength="50" placeholder="账号" autocomplete='off' />
              
               </div>
			<div class='normalInput fieldInput'>
				<input type="password" value="" name="password" id="password" maxlength='16' placeholder='密码' autocomplete='off'/>
			</div>
			
			<div class='rememberField'>
			 <span><input name="remember" id="remember" type="checkbox" value="1"/></span>
				<label for="remember" tabindex="0">记住登录状态</label>
				<a id="#" href="/index/forget"  class='linkABlue rememberFieldForA'>忘记密码?</a>
				<!-- <a id="qrCode_login" href="/go/javascript:void(0);" title="手机扫描二维码登录">手机扫描二维码登录</a> -->
				
			 </div>
			{{ csrf_field()}}

			
			<input type="submit"   value="登录" id="zhuce">
			
		</form>
	</div>
	 </center>
	




<div id='flymeFooter' class='footerWrap'>
	<div class='footerInner'>
		<div class='footer-layer1'>
			<div class='footer-innerLink'>
				<a href="#" target="_blank" title="关于魅族">关于魅族</a>
				<img class="foot-line" src="/go/picture4/space.gif">
				<a href="/go/http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a>
				<img class="foot-line" src="/go/picture4/space.gif">
				<a href="#" target="_blank" title="联系我们">联系我们</a>
				<img class="foot-line" src="/go/picture4/space.gif">
				<a href="#" target="_blank" title="法律声明">法律声明</a>
				<img class="foot-line" src="/go/picture4/space.gif">
				<a href="#" target="_blank" title="常见问题">常见问题</a>
				<img class="foot-line" src="/go/picture4/space.gif">
				<a href="/go/javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a>
			</div>
			<div class='footer-service'>
				<span class='service-label'>客服热线</span>
				<span class='service-num'>400-788-3333</span>
				<a id='service-online' class='service-online' href="/go/javascript:void(0);" title="在线客服">在线客服</a>
			</div>
			<div class='footer-outerLink'>
				<a class='footer-sinaMblog' href="#" target="_blank"><i class='i_icon'></i></a>
				
				<a id='footer-weChat' class='footer-weChat' href="/go/javascript:void(0);" target="_blank"><i class='i_icon'></i></a>
				<a class='footer-qzone' href="/go/http://user.qzone.qq.com/2762957059" target="_blank"><i class='i_icon'></i></a>
			</div>
			<div id="globalContainer" class="footer-language_menu">
				<a href="/go/javascript:void(0)" title="简体中文" class="checked">简体中文</a>
				<a href="/go/javascript:void(0)" id="i18n-link" title="English" class="ClobalItem">English</a>
	            <script>
					;(function() {
					    var url = location.href
					    if (url.indexOf('vCodeLogin')>=0){
					        url = url.replace('vCodeLogin', 'sso')
					    }
						var u = decodeURIComponent(url)
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

	<script charset="utf-8" type="text/javascript" src="/go/js4/jquery-1.7.1.min.js"></script>
	<script charset="utf-8" type="text/javascript" src="/go/js3/jquery-1.8.3.min.js">  </script>
	<script type="text/javascript">

        $('input[type="submit"]').mouseover(function() {

            $(this).css('background','#0aaee3');

        })

        $('input[type="submit"]').mouseout(function() {

            $(this).css('background','#2AC4F6');

        })

	</script>
	<script type="text/javascript" src="/go/js4/geetest.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/jquery.form.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/jquery.validate.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/utils.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/flyme.elements.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/base.js" charset="utf-8"></script>
	<script src="/go/js4/cycode.js"></script>
	<script type="text/javascript" src="/go/js4/login.js" charset="utf-8"></script>
	<!--接入风控sh.min.js-->
    <script type="text/javascript" src="/go/js4/sh.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="/go/js4/crypp.min.js" charset="utf-8"></script>

	</body>
</html>
