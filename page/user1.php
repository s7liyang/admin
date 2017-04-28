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
  	<br><br><center><font color=green size=3><b>全 部 用 户 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="90%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="5%" align="center" valign="bottom" height="19">用户编号ID</td>
		    <td width="10%" align="center" valign="bottom">用户名</td>
		    <td width="10%" align="center" valign="bottom">密码</td>
		    <td width="10%" align="center" valign="bottom">昵称</td>
		    <td width="5%" align="center" valign="bottom">钱包金额</td>
		    <td width="10%" align="center" valign="bottom">头像</td>
		    <td width="10%" align="center" valign="bottom">邮箱</td>
		    <td width="10%" align="center" valign="bottom">电话</td>
		    <td width="5%" align="center" valign="bottom">性别</td>
		    <td width="10%" align="center" valign="bottom">生日</td>
		    <td width="10%" align="center" valign="bottom">个性签名</td>
		    <td width="5%" align="center" valign="bottom">剩余抽奖次数</td>
		</tr>
		<?php
			require('1_init.php');
			$sql = "SELECT * FROM user";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['userid'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['nickname'];?></td>
			<td><?php echo $row['money'];?></td>
			<td><?php echo $row['userimg'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['sex'];?></td>
			<td><?php echo $row['birth'];?></td>
			<td><?php echo $row['sign'];?></td>
			<td><?php echo $row['time'];?></td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
