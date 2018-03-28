
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="欢迎登录和注册魅族Flyme账号，您可以体验手机云服务功能，包括：在线下载应用，同步手机数据和查找手机等，让您的手机管理更加智能。" />
	<meta name="keywords" content="魅族  meizu 登录flyme 云服务  查找手机  充值账号  MX M9 MX2" />
	<meta content="width=1080" name="viewport"/>
	<title>注册Flyme账号</title>
	<link href="/go/css5/base.css" type="text/css" rel="Stylesheet"/>
	<link href="/go/css5/nameregister.css" type="text/css" rel="Stylesheet"/>
	<!--阿里pt.js-->
	<!--<script src="/go/js5/pt.js" data-app="ewogICJjb21tb24iOiB7CiAgICAiYXBwa2V5IjogIlJIVjIiLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAic2NlbmUiOiAiUmVnaXN0ZXIiLAogICAgImZvcmVpZ24iOiAwCiAgfSwKICAidWFiIjogewogICAgIkV4VGFyZ2V0IjogWwogICAgICAicHdkaWQiCiAgICBdLAogICAgInVzZUN1c3RvbVRva2VuIjogZmFsc2UsCiAgICAiRm9ybUlkIjogIm15X2Zvcm0iLAogICAgIkxvZ1ZhbCI6ICJ1YV9sb2ciLAogICAgIlNlbmRJbnRlcnZhbCI6IDIwLAogICAgIlNlbmRNZXRob2QiOiAzLAogICAgIk1heE1DTG9nIjogMTUwLAogICAgIk1heEtTTG9nIjogMTUwLAogICAgIk1heE1QTG9nIjogMTUwLAogICAgIk1heEdQTG9nIjogNSwKICAgICJNYXhUQ0xvZyI6IDE1MCwKICAgICJHUEludGVydmFsIjogNTAsCiAgICAiTVBJbnRlcnZhbCI6IDUwLAogICAgIk1heEZvY3VzTG9nIjogMTUwLAogICAgImlzU2VuZEVycm9yIjogMSwKICAgICJJbWdVcmwiOiAiLy9jZmQuYWxpeXVuLmNvbS9jb2xsZWN0b3IvYW5hbHl6ZS5qc29ucCIsCiAgICAiR2V0QXR0cnMiOiBbCiAgICAgICJocmVmIiwKICAgICAgInNyYyIKICAgIF0sCiAgICAiRmxhZyI6IDE5NjU1NjcKICB9LAogICJ1bWlkIjogewogICAgInRpbWVvdXQiOiAzMDAwLAogICAgInRpbWVzdGFtcCI6ICIkIXRpbWVzdGFtcCIsCiAgICAidG9rZW4iOiAiJCF0b2tlbiIsCiAgICAic2VydmljZVVybCI6ICJodHRwczovL3ludWYuYWxpcGF5LmNvbS9zZXJ2aWNlL3VtLmpzb24iLAogICAgImFwcE5hbWUiOiAiJCFhcHBOYW1lIiwKICAgICJjb250YWluZXJzIjogewogICAgICAiZmxhc2giOiAiY29udGFpbmVyIiwKICAgICAgImRjcCI6ICJjb250YWluZXIiCiAgICB9CiAgfQp9"></script>-->
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
	</style>
</head>
<body>
	<div id='content' class="content">
		


<div class=ucSimpleHeader id="header">
	<a href="http://www.meizu.com" class='meizuLogo'><i class='i_icon'></i></a>
	<div id="trigger">
		<a href="/index/gologin" id="toLogin" class='linkAGray'>登录</a>
		<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
		<a href="/go/https://i.flyme.cn/register" id="toRegister" class='linkAGray'>注册</a>
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
			<form action="/index/doRegister" method="post">
				<div class="number">
					<!-- <a class="linkAGray" id="toTelRegister" href="/go//register">账户注册</a> -->
					<!-- <span class="register-line"></span> -->
					<a class="linkABlue" id="toNameRegister" href>账号注册</a>
				</div>

			
			             
					<div class="normalInput">
						<input type="text" value="{{old('username')}}" name="username" id="account" class='username' maxlength='32' placeholder='账号' autocomplete='off'/>
						<!-- <span class='grayTip'>@flyme.cn</span> -->
					</div>
				<div class='lineWrap normalInput'>
					<input type="text"  name="password" id="password" maxlength="16" autocomplete="off"/>
					<input type="password"  name="password" id="password1" maxlength="16"  placeholder='密码' style='display:none' autocomplete="off"/>
					<a id="pwdBtn" class="pwdBtnShow noselect" onselectstart="return false">
						<i class="i_icon"></i>
					</a>
					<div class='clear'></div>
				</div>
               
			
				<div class='lineWrap normalInput'>
					<input type="text" value="{{old('phone')}}" name="phone" id="phone" placeholder='手机号码' maxlength='11' autocomplete='off'/>
				</div>
				<div class='lineWrap normalInput'>
					<input type="text" value="{{old('email')}}" name="email" id="email" placeholder='安全邮箱' maxlength='32' autocomplete='off'/>
				</div>
				<div class='clear'></div>
				<div class="normalInput">
					<input type="text" name="vcode" id="kapkey" maxlength="6" style="margin-right:500px;" placeholder='验证码' autocomplete='off'/>
					<!-- <img src="/vcode" onclick='this.src=this.src+"?1"' alt=""> -->
					<span id="yanzhengma"><img src="/vcode"  onclick = 'this.src = this.src +"?1"' alt=""></span>
					<!-- <a id="getKey" href="/go/javascript:void(0);"  class="linkABlue">获取验证码</a> -->
				</div>
				<div id='rememberField' class="rememberField">
					<span><input name="acceptFlyme" id="acceptFlyme" type="checkbox" value="1" checked='checked'></span>
					<label class='pointer' for="acceptFlyme" tabindex="0">我已阅读并接受</label>
					<a href="/go//serviceAgreement" target='_blank' class="linkABlue">《Flyme服务协议条款》</a>
				</div>
				<input type="hidden" name="vCodeTypeValue" value="16" />
				{{ csrf_field()}}
				<span id='acceptError' class='otherError' style='display:none;'>请确认已阅读并同意Flyme服务协议条款</span>
				<input type="submit"   value="注册" id="zhuce">
			</form>
		<!-- <input type="hidden" name="appuri" value="" id="appuri" />
		<input type="hidden" name="useruri" value="" id="useruri" />
		<input type="hidden" name="service" value="" id="service" />
		<input type="hidden" name="sid" value="" id="sid" /> -->
		</div>
	</div>
	
<div id='flymeFooter' class='footerWrap'>
	<div class='footerInner'>
		<div class='footer-layer1'>
			<div class='footer-innerLink'>
				<a href="http://www.meizu.com/about.html" target="_blank" title="关于魅族">关于魅族</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="http://hr.meizu.com" target="_blank" title="工作机会">工作机会</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="http://www.meizu.com/contact.html" target="_blank" title="联系我们">联系我们</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="http://www.meizu.com/legalStatement.html" target="_blank" title="法律声明">法律声明</a>
				<img class="foot-line" src="/go/picture5/space.gif">
				<a href="/go/javascript:void(0);" id="globalName" class="footer-language" title="简体中文">简体中文&nbsp;&nbsp;&nbsp;</a>
			</div>
			<div class='footer-service'>
				<span class='service-label'>客服热线</span>
				<span class='service-num'>400-788-3333</span>
				<a id='service-online' class='service-online' href="/go/javascript:void(0);" title="在线客服">在线客服</a>
			</div>
			<div class='footer-outerLink'>
				<a class='footer-sinaMblog' href="http://weibo.com/meizumobile" target="_blank"><i class='i_icon'></i></a>
				
				<a id='footer-weChat' class='footer-weChat' href="/go/javascript:void(0);" target="_blank"><i class='i_icon'></i></a>
				<a class='footer-qzone' href="http://user.qzone.qq.com/2762957059" target="_blank"><i class='i_icon'></i></a>
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
				<a href="http://www.miitbeian.gov.cn/" class='linkAGray' target="_blank">备案号: 粤ICP备13003602号-4</a>
				<a href="http://www3.res.meizu.com/static/cn/widget/footer/images/icp2_b2dcb54.jpg" class='linkAGray' target="_blank">经营许可证编号: 粤B2-20130198</a>
				<a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true" class="linkAGray">营业执照</a>
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
	<script type="text/javascript">

        $('input[type="submit"]').mouseover(function() {

            $(this).css('background','#0aaee3');

        })

        $('input[type="submit"]').mouseout(function() {

            $(this).css('background','#2AC4F6');

        })

	</script>
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
