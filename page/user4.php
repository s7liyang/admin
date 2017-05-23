<!DOCTYPE HTML>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="keywords" content="scclui框架">
	<meta name="description" content="scclui为轻量级的网站后台管理系统模版。">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>首页</title>
 </head>
  <body>
	<h1>添加用户</h1>
	<form action="user_addpost.php" method="post">
    <div>用户名：<input type="text" name="username" value="" /></div>
    <div>密码：<input type="text" name="password" value="" /></div>
    <div>昵称：<input type="text" name="nickname" value="" /></div>
    <div>用户头像：<input type="text" name="userimg" value="" /></div>
    <div>邮箱：<input type="text" name="email" value="" /></div>
    <div>手机：<input type="text" name="phone" value="" /></div>
    <div>性别：
         <input type="radio" value="男" name="sex" checked='checked'/>男
         <input type="radio" value="女" name="sex"/>女
    </div>
		<div>生日：<input type="text" name="birth" value=""/></div>
		<div>心情：<input type="text" name="sign" value=""/></div>
		<div><input type="submit" value="添加用户" /></div>
	</form>
  </body>
</html>