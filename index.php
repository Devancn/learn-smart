<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/4
 * Time: 21:49
 */
//进入smarty类
include "libs/Smarty.class.php";
//实例化对象
$smarty=new Smarty();
//设置相关属性,主要设置模板目录和编译目录
$smarty->template_dir='templates';//这里的路径可以加'/'也可以 不加
$smarty->compile_dir='templates_c';//这里的路径可以加'/'也可以 不加
//$smarty->left_delimiter="<{";  //更改定界符
//$smarty->right_delimiter="}>";//更改定界符
//分配变量
$smarty->assign('title','smart模板引擎');
$smarty->assign('content','smart是一个非常强大的模板引擎');
$smarty->assign('money',10000000000);
$smarty->assign('yes',true);
$hero=array('东邪','西毒','南帝','北丐','神通');
$weapon=array(
	'dx'=>'工',
	'xh'=>'民',
	'nd'=>'有',
	'bg'=>'上',
);
$smarty->assign('hero',$hero);
$smarty->assign('weapon',$weapon);
define("ROOT",getcwd());
//载入模板页面
$smarty->display('index.tpl');