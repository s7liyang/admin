<?php
@$pid = $_POST['pid'];
@$pname = $_POST["pname"];
@$price  = $_POST["price"];
@$pic = $_POST["pic"];

$db = new MySQLi("localhost","root","root","gift");
!mysqli_connect_error() or die("连接失败！");

$sql = "update product set pname='$pname',
						   price='$price',
						   pic='$pic' where pid=$pid";
//$sql = "update user set Name='{$name}',Sex={$s},Nation='{$nation}',Birthday='{$birthday}' where Code='{$code}'";
//$sql = "update user set username='{$username}',
//						password='{$password}',
//						nickname='{$nickname}',
//						money= 888,
//						userimg='{$userimg}',
//						email='{$email}',
//						phone='{$phone}',
//						sex={$s},
//						birth='{$birth}',
//						sign='{$sign}',
//						time={$time} WHERE userid='{$userid}'";
//$sql = "update user set username=77 where userid=$userid";
$r = $db->query($sql);
if($r)
{
    header("location:product1.php");
}
else
{
    echo "fail！";
}
?>