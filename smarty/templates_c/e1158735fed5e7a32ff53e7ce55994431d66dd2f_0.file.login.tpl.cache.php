<?php /* Smarty version 3.1.27, created on 2015-07-28 07:50:25
         compiled from "E:\www\easyCms\smarty\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144955b71821181263_81767983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1158735fed5e7a32ff53e7ce55994431d66dd2f' => 
    array (
      0 => 'E:\\www\\easyCms\\smarty\\templates\\login.tpl',
      1 => 1438062622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144955b71821181263_81767983',
  'variables' => 
  array (
    'BasePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b718211a8365_43044305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b718211a8365_43044305')) {
function content_55b718211a8365_43044305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144955b71821181263_81767983';
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootstrap.min.css" rel="stylesheet">

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
    <h1>你好，世界！</h1>

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
  </body>
</html><?php }
}
?>