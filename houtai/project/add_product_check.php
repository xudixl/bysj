<?php
require_once('../config.php');
//接受文件，临时文件信息

//当文件上传成功，存入临时文件夹，服务器端开始判断
/*if ($error==0) {
    if ($size>$maxsize) {
        exit("上传文件过大！");
    }
    if (!in_array($ext, $allowExt)) {
        exit("非法文件类型");
    }
    if (!is_uploaded_file($tmp_name)) {
        exit("上传方式有误，请使用post方式");
    }
    //判断是否为真实图片（防止伪装成图片的病毒一类的
    if (!getimagesize($tmp_name)) {//getimagesize真实返回数组，否则返回false
        exit("不是真正的图片类型");
    }
    //move_uploaded_file($tmp_name, "uploads/".$filename);
    if (@move_uploaded_file($tmp_name, $destination)) {//@错误抑制符，不让用户看到警告
        echo "文件".$filename."上传成功!";
    }else{
        echo "文件".$filename."上传失败!";
    }
}else{
    switch ($error){
        case 1:echo "超过了上传文件的最大值，请上传2M以下文件";break;
        case 2:echo "上传文件过多，请一次上传20个及以下文件！";break;
        case 3:echo "文件并未完全上传，请再次尝试！";break;
        case 4:echo "未选择上传文件！";break;
        case 7:echo "没有临时文件夹";break;
    }
}*/
$title = $_POST['title'];
$imagename = $_POST['imagename'];
$price = $_POST['price'];
$goodtime = date("Y-m-d H:i:s");

$sql  = "insert into `product`(title,imgname,price,goodtime) values('$title','$imagename','$price','$goodtime')";
$res = mysqli_query($link,$sql);
if($res){
    echo "<script>alert('添加信息成功');location.href='product.php';</script>";
}else{
    echo "<script>alert('添加信息失败');location.href='product.php';</script>";
}
?>