<?php
//1.引入smart类
include 'libs/Smarty.class.php';
//2.实例化对象
$smarty=new Smarty();
//3.设置属性
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
//4分配变量
$man=array('潘安','宋玉','龙阳君','兰陵王');
$number=array('001','002','003','004');
$smarty->assign('man',$man);
$smarty->assign('number',$number);
$man1=array(
	'001'=>'潘安',
	'002'=>'宋玉',
	'003'=>'龙阳君',
	'004'=>'兰陵王'
);
$smarty->assign('man1',$man1);
$smarty->assign('selected',array('001','003'));
//5.载入模板
$smarty->display('checkbox.tpl');