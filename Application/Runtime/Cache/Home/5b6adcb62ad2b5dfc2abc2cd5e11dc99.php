<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ((isset($title) && ($title !== ""))?($title): "登录-我的易迅"); ?></title>
	<link rel="stylesheet" href="/yixun/Public/home/css/style.css">
	<link rel="stylesheet" href="/yixun/Public/home/css/login_style.css">
</head>
<body>
 <!--[if IE]>
    <style>
		.enter_sub{
			margin-left:48px;
		}
    </style>
<![endif]-->
	<div class="sx_head_logo">
		<img src="/yixun/Public/home/images/logo_2013_v1.png" alt="易迅网">
	</div>
	<!--main主体-->
	<div class="enter_main1">
	<div class="enter_main">
		<div class="enter_picture"><img src="/yixun/Public/home/images/enter2.jpg"></div>
		<!--form表单块-->
		<div class="enter_enter">
			<div class="enter_number"><h2>账号登录</h2>		
			</div>
			<div class="enter_form">
			<!--<form action="/yixun/index.php/Home/Login/enter" id="login_form" method="post">
				<div class="enter_inp2">
				<input type="text" name="uname"  class="enter_inp" placeholder="手机号/QQ号" ><br />
				</div>
				<div class="enter_inp2">
				<input type="password" name="pwd" class="enter_inp" placeholder="密码" ><br />
				</div>
				<input type="submit" value="登录" class="enter_sub">
			</form>-->
			<div id="login_form">
				<div class="enter_inp2">
				<input type="text" name="uname"  class="enter_inp" placeholder="手机号/QQ号" ><br />
				</div>
				<div class="enter_inp2">
				<input type="password" name="pwd" class="enter_inp" placeholder="密码" ><br />
				</div>
				<input type="submit" value="登录" class="enter_sub">
			</div>
			</div>
			<ul class="enter_forget">
				<li>意见反馈</li>
				<li>注册新账号|</li>
				<li><a href="/yixun/index.php/home/findpwd">忘记密码</a>？|</li>
			</ul>
			<div class="enter_empty"></div>
			<div class="enter_else">
				<span class="enter_way">其他登录方式</span>
				<div class="enter_way1"><img src="/yixun/Public/home/images/qq125_24.jpg" alt=""></div>
			
				<span class="enter_way" style="margin-left:50px"><a href="/yixun/index.php/home/register">注册新账号</a></span>
			</div>
		</div>	
		<div class="enter_enters">
			<div class="enter_check">
					<input type="checkbox" name="check" checked id="login_negotiate"><span>我已阅读<a href="/yixun/index.php/Home/Login/loginservice">《易迅用户服务协议》</a></span>
			</div>
		</div>
	</div>
	</div>
	<div class="login_foot">
		下载易迅手机客户端及时抢购，捷足先登立即下载手机登录m.yixun.com随时随地快速购物<br />
		copyright©2006-2014，上海易迅电子商务发展有限公司版权所有沪IPC备06024200号，上海公安局宝山分局备案编号：3101130646
	</div>
</body>
    <script src="/yixun/Public/home/js/jquery.js" type="text/javascript"></script>
    <script src="/yixun/Public/home/js/common.js" type="text/javascript"></script>
</html>