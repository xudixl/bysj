<?php
//添加新闻资讯
require_once('../config.php');
$dep=$_POST['dep'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$work = $_POST['work'];
//$newtime = date("Y-m_d H:i:s",time());
$sql  = "insert into `news`(dep,name,sex,work) values('$dep','$name','$sex','$work')";
$res = mysqli_query($link,$sql);
if($res){
    echo "<script>alert('添加信息成功');location.href='news.php';</script>";
}else{
    echo "<script>alert('添加信息失败');location.href='news.php';</script>";
}
?>