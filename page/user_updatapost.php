<?php
@$userid = $_POST['userid'];
@$username = $_POST["username"];
@$password  = $_POST["password"];
@$nickname = $_POST["nickname"];
@$money = $_POST["money"];
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
@$time  = $_POST["time"];


$db = new MySQLi("localhost","root","root","gift");
!mysqli_connect_error() or die("连接失败！");

$sql = "update user set username='$username',
						password='$password',
						nickname='$nickname',
						money=$money,
						userimg='$userimg',
						email='$email',
						phone='$phone',
						sex=$sex,
						birth='$birth',
						sign='$sign',
						time=$time where userid=$userid";
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
    header("location:user2.php");
}
else
{
    echo "fail！";
}
?>