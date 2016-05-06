<?php
//自定义插件
function smarty_modifier_mytool($string,$param){
	//处理过程
	$string=$string."-------".$param;
	//返回处理结果
	return $string;
}