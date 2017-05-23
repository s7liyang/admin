<?php
//$db = new MySQLi("localhost","root","root","gift");
//!mysqli_connect_error() or die("连接失败！");
require('conn.php');
$id = $_GET["id"];

$sql = "delete from address where userid ='{$id}'";
$db->query($sql);
$sql = "delete from cart where userid ='{$id}'";
$db->query($sql);
$sql = "delete from coupon where userId ='{$id}'";
$db->query($sql);
$sql = "delete from feedback where userid ='{$id}'";
$db->query($sql);
$sql = "delete from my_order where userId ='{$id}'";
$db->query($sql);

$sql = "delete from user where userid ='{$id}'";
$r = $db->query($sql);
if($r)
{
  header("location:user2.php");
}
else
{
  echo "删除失败！";
}
?>