<?php
/**
*接收客户端提交的name和password，执行数据库验证，返回 {"code":1, "name":"liang", "userid":1} 或 {"code":2, "msg":"用户名或密码错误" }
*/
header('Content-Type: application/json;charset=UTF-8');

@$n = $_REQUEST['adminName'] or die('{"code":3, "msg":"adminName required"}');
@$p = $_REQUEST['adminPass'] or die('{"code":4, "msg":"adminPass required"}');

require('1_init.php');
$sql = "SELECT * FROM admin WHERE adminName='$n' AND adminPass='$p'";
$result = mysqli_query($conn,$sql);
//此处省略了$result为false的判断

$row = mysqli_fetch_assoc($result);
if($row===null){		//查询结果集中没有记录
  $output=['code'=>2,'msg'=>'用户名或密码错误'];
}else {  //查询结果集中有数据,验证成功
  $output = ['code'=>1,'adminName'=>$n];
}
echo json_encode($output);