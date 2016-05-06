<?php
//1.引入smart类
include 'libs/Smarty.class.php';
//2.实例化对象
$smarty=new Smarty();
//3.设置属性
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
//4分配变量
$beauty=array('西施','貂蝉','王昭君','杨玉环');
$number=array('001','002','003','004');
$smarty->assign('beauty',$beauty);
$smarty->assign('number',$number);
$beauty1=array(
	'001'=>'西施',
	'002'=>'貂蝉',
	'003'=>'王昭君',
	'004'=>'杨玉环'
);
$smarty->assign('beauty1',$beauty1);
//5.载入模板
$smarty->display('radio.tpl');