<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加信息</title>
    <style type="text/css">
        #cnt{
            width:400px;
            height:400px;
            margin-top:15px;
            margin-left: 15px;
        }
    </style>
</head>
<body>
<div id="cnt">
    <form method="post" action="add_product_check.php" enctype="multipart/form-data">
        种类:<input type="text" name="title" id="title"></br></br>
        运输状态:<input type="text" name="price"></br></br>
        <input type="submit" value="添加信息">
    </form>
</div>
</body>
</html>