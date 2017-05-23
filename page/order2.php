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
  	<br><br><center><font color=green size=3><b>全 部 订 单 列 表</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="10%" align="center" valign="bottom" height="19">订单编号ID</td>
		    <td width="10%" align="center" valign="bottom">订单金额</td>
		    <td width="10%" align="center" valign="bottom">商品数量</td>
		    <td width="20%" align="center" valign="bottom">订单时间</td>
		    <td width="30%" align="center" valign="bottom">订单状态(1-待发货,2-已发货,3-已完成)</td>
		    <td width="10%" align="center" valign="bottom">用户ID</td>
		    <td width="10%" align="center" valign="bottom">操作</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM my_order";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['oid'];?></td>
			<td><?php echo $row['price'];?></td>
			<td><?php echo $row['sumCount'];?></td>
			<td><?php $t = $row['orderTime']/1000; echo date('Y-m-d H:i:s',$t); ?></td>
			<td><?php 
				$status = $row['status'];
				switch ($status)
				{
				 case 1:
				 echo "1-待发货";
				 break;
				 case 2:
				 echo "2-已发货";
				 break;
				 case 3:
				 echo "3-已完成";
				 break;
				}
			?></td>
			<td><?php echo $row['userId'];?></td>
			<td>
				<a href='order_delete.php?id=<?php echo $row['oid'];?>');\">删除</a>
				<a href='order_updata.php?id=<?php echo $row['oid'];?>');\">修改状态</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
