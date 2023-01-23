<?php
require_once('../config.php');
$id = $_GET['id'];
$dep = $_POST['dep'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$work = $_POST['work'];
//$newtime = date("Y-m-d H:i:s",time());

$sql = "UPDATE news SET dep='$dep',name='$name',sex='$sex',work='$work' where id='$id'";
$res = mysqli_query($link,$sql);
if($res){
    echo "<script>alert('修改员工信息成功');location.href='news.php'</script>";
}else{
    echo "<script>alert('修改员工信息失败');history.go(-1);</script>";
}
?>
