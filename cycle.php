<?php
//1.引入smart类
include 'libs/Smarty.class.php';
//2.实例化对象
$smarty=new Smarty();
//3.设置属性
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
//4分配变量
//二维数组
$user=array(
	array('id'=>1,'username'=>'张无忌','age'=>26),
	array('id'=>2,'username'=>'李寻欢','age'=>16),
	array('id'=>3,'username'=>'王语嫣','age'=>20),
	array('id'=>4,'username'=>'赵敏','age'=>18)
);
$smarty->assign('user',$user);
//5.载入模板
$smarty->display('cycle.tpl');