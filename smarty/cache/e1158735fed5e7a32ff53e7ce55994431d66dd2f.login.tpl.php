<?php
/*%%SmartyHeaderCode:2546655b87abfbfb053_82326909%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1158735fed5e7a32ff53e7ce55994431d66dd2f' => 
    array (
      0 => 'E:\\www\\easyCms\\smarty\\templates\\login.tpl',
      1 => 1438153394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2546655b87abfbfb053_82326909',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_55b8930649e0f2_60603790',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b8930649e0f2_60603790')) {
function content_55b8930649e0f2_60603790 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登陆系统</title>
    <!-- Bootstrap -->
    <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/css/bootflat.css" rel="stylesheet">
    <link href="http://localhost/css/login.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="warp">
      <div class="login">
        <form  id="loginForm" class="form-horizontal" action="">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h4>欢迎使用网站后台管理系统</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="email" class="form-control" id="inputEmail3" placeholder="账号">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="email" class="form-control" id="inputEmail3" placeholder="密码">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-info btn-block">登录</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/js/bootstrap.min.js"></script>
    
    <!-- Bootflat's JS files.-->
    <script src="http://localhost/js/icheck.min.js"></script>
    <script src="http://localhost/js/jquery.fs.selecter.min.js"></script>
    <script src="http://localhost/js/jquery.fs.stepper.min.js"></script>
    <script type="text/javascript">
    $(function(){
        
          moveCenter();

          $(window).resize(function(event) {
            
            moveCenter();

          });
    })

    function moveCenter(){

        var h=window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

          var lh = $('.warp').height();

           $('.warp').css('top', (h / 2 - lh / 2) +'px' ); 


    }

    </script>
  </body>
</html><?php }
}
?>