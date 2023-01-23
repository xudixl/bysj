<?php
require_once('../config.php');
$sql ="SELECT * from about order by id desc limit 0,2";
$res = mysqli_query($link,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>产品展会</title>
    <link rel="stylesheet" href="../public/bootstrap-4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/jquery.js"></script>
    <script src="../public/bootstrap-4.1.3/js/bootstrap.bundle.js"></script>
    <script src="../public/bootstrap-4.1.3/js/bootstrap.js"></script>
</head>
<body>
<!--蔬菜栏设计-->
<div class="container">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark nav-css">
        <div class="big"><a href="">企业网站</a></div>
        <a class="navbar-brand" href="#">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#" data-toggle="pill">首页</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="pill">关于我们</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="pill">新闻资讯</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="pill">产品展示</a></li>
                <li class="nav-item"><a class="nav-link" href="#" data-toggle="pill">联系我们</a></li>
            </ul>
        </div>
    </nav>
    <p class="head-tit">
        <span class="span-tit">关于我们</span>
    </p>
    <div class="row">
        <?php while($result=mysqli_fetch_array($res)){ ?>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a href="">
                    <div class="alert alert-success">
                        <div>
                            <h3 ><?php echo $result['title']?></h3>
                            <p><?php echo $result['content']?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>