<?php
//@$userid = $_POST['userid'];
@$username = $_POST["username"];
@$password  = $_POST["password"];
@$nickname = $_POST["nickname"];
//@$money = $_POST["money"];
@$userimg  = $_POST["userimg"];
@$email = $_POST["email"];
@$phone = $_POST["phone"];
@$s = $_POST["sex"];
$sex=1;
if($s=="女")
{
    $sex=0;
}
@$birth = $_POST["birth"];
@$sign = $_POST["sign"];
//@$time  = $_POST["time"];


$db = new MySQLi("localhost","root","root","gift");
!mysqli_connect_error() or die("连接失败！");

//创建用户资料表单
require('1_init.php');
$sql = "INSERT INTO user VALUES(NULL,'$username','$password','$nickname',0,'$userimg','$email','$phone',$sex,'$birth','$sign',5)";
$result = mysqli_query($conn,$sql);
$userId = mysqli_insert_id($conn);
//继续创建用户的收货地址表单
$sql = "INSERT INTO address VALUES(NULL,'$userId',NULL,NULL,NULL,NULL,NULL)";
$r = $db->query($sql);
if($r)
{
    header("location:user2.php");
}
else
{
    echo "fail！";
}
?>