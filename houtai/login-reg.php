<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>登录注册界面</title>
<meta name="description" content="HTML5" /> 
<meta name="keywords" content="HTML5,交互式,注册登录,切换" />
<meta name="author" content="js代码" />
<meta name="Copyright" content="js代码" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>登录</h2>
            <p>已有账号，直接登录！</p>
            <button class="btn_login" onclick="cambiar_login()">登录</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>注册</h2>
            <p>还没有账号？免费注册！</p>
            <button class="btn_sign_up" onclick="cambiar_sign_up()">注册</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="images/po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="images/po.jpg" alt="" /> </div>
        <form  method="post" action="login_check.php"   >
            <div class="cont_form_login"> <a href="login-reg.php">X</a>
              <h2>登录(密码或MD5密钥登录)</h2>
              <input type="text" name="username" placeholder="用户名">
              <input type="password"  name="password" placeholder="密码" >
              <input type="password"  name="Md5" placeholder="MD5密钥" >
              <button class="btn_login" name="check" >登录</button>
            </div>
        </form>
        <form method="post" action="reg_check.php" >
            <div class="cont_form_sign_up"> <a href="login-reg.php" >X</a>
              <h2>注册</h2>
              <input type="text" name="email" placeholder="邮箱">
              <input type="text" name="username" placeholder="用户名">
              <input type="password"  name="password" placeholder="密码" >
              <input type="password" name="password2"  placeholder="再次输入密码">
              <button class="btn_sign_up" name="check">注册</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="js/index.js"></script>
</body>
</html>
