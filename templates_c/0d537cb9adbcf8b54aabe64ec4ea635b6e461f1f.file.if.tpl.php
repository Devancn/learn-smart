<?php /* Smarty version Smarty-3.1.16, created on 2016-05-05 10:20:33
         compiled from "templates\if.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40572aadf16250f6-20087168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d537cb9adbcf8b54aabe64ec4ea635b6e461f1f' => 
    array (
      0 => 'templates\\if.tpl',
      1 => 1462414727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40572aadf16250f6-20087168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'score' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_572aadf1660512_11468805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572aadf1660512_11468805')) {function content_572aadf1660512_11468805($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>你的分数是:<?php echo $_smarty_tpl->tpl_vars['score']->value;?>
</p>
    <p>你对应的等级是:
        <?php if ($_smarty_tpl->tpl_vars['score']->value==100) {?>
            A+
        <?php } elseif ($_smarty_tpl->tpl_vars['score']->value<100&&$_smarty_tpl->tpl_vars['score']->value>=90) {?>
            A
        <?php } elseif ($_smarty_tpl->tpl_vars['score']->value<90&&$_smarty_tpl->tpl_vars['score']->value>=80) {?>
            B
        <?php } elseif ($_smarty_tpl->tpl_vars['score']->value<80&&$_smarty_tpl->tpl_vars['score']->value>=70) {?>
            C
        <?php } elseif ($_smarty_tpl->tpl_vars['score']->value<70&&$_smarty_tpl->tpl_vars['score']->value>=60) {?>
            D
        <?php } else { ?>
            E
        <?php }?>
    </p>
</body>
</html><?php }} ?>
