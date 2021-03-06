<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登陆系统</title>
    <!-- Bootstrap -->
    <link href="{$BasePath}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$BasePath}css/bootflat.css" rel="stylesheet">
    <link href="{$BasePath}css/login.css" rel="stylesheet">
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
                <h4>{$title}</h4>
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
    <script src="{$BasePath}js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{$BasePath}js/bootstrap.min.js"></script>
    
    <!-- Bootflat's JS files.-->
    <script src="{$BasePath}js/icheck.min.js"></script>
    <script src="{$BasePath}js/jquery.fs.selecter.min.js"></script>
    <script src="{$BasePath}js/jquery.fs.stepper.min.js"></script>
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
</html>