<?php
$PHP_SELF=$_SERVER['PHP_SELF'];

define('BasePath', 'http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1));

require_once  'setup.php';

$smarty = new SmartyCms();

$smarty -> assign('BasePath',BasePath);

$smarty -> assign('title','网站后台管理系统');

$smarty->display('main.tpl');




?>