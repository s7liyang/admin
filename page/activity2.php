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
  	<br><br><center><font color=green size=3><b>优	惠	券 信 息 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="20%" align="center" valign="bottom" height="19">优惠券ID</td>
		    <td width="20%" align="center" valign="bottom">优惠券金额</td>
		    <td width="20%" align="center" valign="bottom">领取时间</td>
		    <td width="30%" align="center" valign="bottom">优惠券状态(1-未使用,2-已使用)</td>
		    <td width="10%" align="center" valign="bottom">用户ID</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM coupon";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['cid'];?></td>
			<td><?php echo $row['price'];?></td>
			<td><?php $t = $row['couponTime']/1000; echo date('Y-m-d H:i:s',$t); ?></td>
			<td><?php
				$status = $row['status'];
				switch ($status)
				{
				 case 1:
				 echo "1-未使用";
				 break;
				 case 2:
				 echo "2-已使用";
				 break;
				}
			?></td>
			<td><?php echo $row['userId'];?></td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
