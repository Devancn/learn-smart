<?php
//1.引入smart类
include 'libs/Smarty.class.php';
//2.实例化对象
$smarty=new Smarty();
//3.设置属性
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
//4分配变量
$smarty->assign('score',80);
//5.载入模板
$smarty->display('if.tpl');