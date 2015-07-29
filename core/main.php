<?php
$PHP_SELF=$_SERVER['PHP_SELF'];

require_once  'setup.php';

define('BasePath', 'http://'.$_SERVER['HTTP_HOST'].'/');

$smarty = new SmartyCms();

$smarty -> assign('BasePath',BasePath);

$smarty -> assign('title','网站后台管理系统');

$smarty->display('main.tpl');




?>