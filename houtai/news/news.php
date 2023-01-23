<?php
require_once('../config.php'); //连接数据库
$page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
$page=!empty($page) ? $page :1;
$table_name="news";//查取表名设置
$perpage=5;//每页显示的数据个数
//最大页数和总记录数
$total_sql="SELECT count(*) from $table_name";
$total_result =mysqli_query($link,$total_sql);
$total_row=mysqli_fetch_row($total_result);
$total = $total_row[0];//获取最大页码数
$total_page = ceil($total/$perpage);//向上整数
//临界点
$page=$page>$total_page ? $total_page:$page;//当下一页数大于最大页数时的情况
//分页设置初始化
$start=($page-1)*$perpage;
$sql = "SELECT * from news order by id desc limit $start,$perpage";
$info = mysqli_query($link,$sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>展示员工信息</title>
    <style type="text/css">
        .top{height:30px;line-height:30px;float:right;margin-right:15px;}
        .top a{color:red;text-decoration:none;}
        .cont{width:100%;height:300px;float:left;}
        .cont_ct{float:left;}
        table{width:100%;border:1px solid #eee;text-align:center;}
        th{background:#eee;}
        td{width:200px;height:30px;}
    </style>
</head>
<body>
<div class="top"><a href="add_news.php">添加农产品</a></div>

<div class="cont">
    <table cellspacing="0" cellpadding="0" border="1">
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>单价</th>
            <th>重量</th>
            <th>总价</th>
            <th>操作</th>
        </tr>
        <?php
        //获取表中的数据
        while(@$row=mysqli_fetch_array($info)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
              
                <td><?php echo $row['dep']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['sex']; ?></td>
                <td><?php echo $row['work']; ?></td>
                <td>
                    <a href="update_news.php?id=<?php echo $row['id']; ?>">修改</a>
                    <a href="del_news.php?id=<?php echo $row['id']; ?>">删除</a>
                </td>
            </tr>
            <?php } ?>
        <tr>
            <td colspan="5">
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=1"?>">首页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page-1)?>">上一页</a><a href="<?php echo "$_SERVER[PHP_SELF]?page=".($page+1)?>">下一页</a>
                <a href="<?php echo "$_SERVER[PHP_SELF]?page={$total_page}"?>">末页</a>
            </td>
        </tr>
    </table>
</div>
</body>
</html>