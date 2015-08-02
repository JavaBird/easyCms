<?php /* Smarty version 3.1.27, created on 2015-07-30 14:33:46
         compiled from "E:\www\easyCms\smarty\templates\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1986655ba35cae70af3_76318125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4b9e6aed31af12270462039a8fccc6b7fe5dc9' => 
    array (
      0 => 'E:\\www\\easyCms\\smarty\\templates\\main.tpl',
      1 => 1438266824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986655ba35cae70af3_76318125',
  'variables' => 
  array (
    'title' => 0,
    'BasePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ba35caf20794_02806073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ba35caf20794_02806073')) {
function content_55ba35caf20794_02806073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1986655ba35cae70af3_76318125';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootflat.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/main.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <div class="topNav">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">EasyCMS后台管理系统</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">主页<span class="sr-only">(current)</span></a></li>
              <li><a href="#">栏目</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设置 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">退出</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </div>
        </div>
          <div class="dleft">
            <div class="">
              <div>
                <h5>网站栏目</h5>
              </div>
              <div>
                
              </div>
            </div>
          </div>
          <div class="dright">
            
          </div>

        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <!-- Bootflat's JS files.-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/icheck.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.fs.selecter.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
js/jquery.fs.stepper.min.js"><?php echo '</script'; ?>
>
        
      </body>
    </html><?php }
}
?>