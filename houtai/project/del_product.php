<?php
require_once('../config.php');
$id = $_GET['id'];
$sql = "DELETE from product where id='$id'";
$res = mysqli_query($link,$sql);
if($res){
    echo "<script>alert('删除产品成功');location.href='product.php'</script>";
}else{
    echo "<script>alert('删除产品失败');location.href='product.php'</script>";
}
?>