<?php
//@$pid = $_POST['pid'];
@$pname = $_POST["pname"];
@$price  = $_POST["price"];
@$pic = $_POST["pic"];


$db = new MySQLi("localhost","root","root","gift");
!mysqli_connect_error() or die("连接失败！");

$sql = "INSERT INTO product VALUES(NULL,'$pname','$price','$pic')";
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