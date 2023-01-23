<?php
require_once('../config.php');
$id = $_GET['id'];
$sql = "SELECT * from news where id='$id'";
$res = mysqli_query($link,$sql);
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改员工信息</title>
    <style type="text/css">
        .ipt{width:180px;height:30px;border-radius:5px;
            outline:none;border:1px solid #eee;box-sizing:border-box;padding-left:15px;}
        .sub{width:50px;height:20px;border:1px solid #eee;background:#eee;color:#ff7575;}
    </style>
</head>
<body>
<form method="post" action="update_news_check.php?id=<?php echo $id;?>">
    部门号：<input type="text" name="dep" class="ipt">
    </br></br>
    姓名：<input type="text" name="name" class="ipt">
    </br></br>
    性别：<input type="text" name="sex" class="ipt">
    </br></br>
    职业：<input type="text" name="work" class="ipt">
    </br></br>
  
    <input type="submit" value="修改" class="sub">
</form>
</body>
</html>