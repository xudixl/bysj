<?php
ob_start();  //开启缓存
session_start();
header("Content-type:text/html;charset=utf-8");
$link = mysqli_connect('1.com','root','123456','article');
mysqli_query($link, "set names utf8");
if (!$link) {
    die("连接失败:".mysqli_connect_error());
}
?>
