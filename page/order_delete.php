<?php
//$db = new MySQLi("localhost","root","root","gift");
//!mysqli_connect_error() or die("连接失败！");
require('conn.php');
$id = $_GET["id"];

$sql = "delete from my_order where oid ='{$id}'";
$r = $db->query($sql);
if($r)
{
  header("location:order1.php");
}
else
{
  echo "删除失败！";
}
?>