<?php /* Smarty version 3.1.27, created on 2015-07-29 10:56:59
         compiled from "E:\www\easyCms\smarty\templates\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:335455b8955b143354_29139877%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4b9e6aed31af12270462039a8fccc6b7fe5dc9' => 
    array (
      0 => 'E:\\www\\easyCms\\smarty\\templates\\main.tpl',
      1 => 1438160122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '335455b8955b143354_29139877',
  'variables' => 
  array (
    'title' => 0,
    'BasePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b8955b191560_76755543',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b8955b191560_76755543')) {
function content_55b8955b191560_76755543 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '335455b8955b143354_29139877';
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
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BasePath']->value;?>
css/bootflat.css" rel="stylesheet">
    
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
    
ssssssssssssss
    
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