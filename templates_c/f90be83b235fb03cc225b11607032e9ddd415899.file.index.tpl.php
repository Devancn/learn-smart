<?php /* Smarty version Smarty-3.1.16, created on 2016-05-05 17:48:37
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28184572a01c7890623-32788969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1462441716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28184572a01c7890623-32788969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_572a01c78b7721_58180907',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'money' => 0,
    'yes' => 0,
    'hero' => 0,
    'weapon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572a01c78b7721_58180907')) {function content_572a01c78b7721_58180907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_mytool')) include 'D:\\AMP\\www\\smarty\\libs\\plugins\\modifier.mytool.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
        <style>
            h1{
                color:tomato;
            }
        </style>
    
</head>
<body>
    
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <p><?php echo smarty_modifier_mytool($_smarty_tpl->tpl_vars['content']->value,'这是自定义的变量调节器');?>
</p>
    <div><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['yes']->value;?>
</div>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['hero']->value[0];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['hero']->value[1];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['hero']->value[2];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['hero']->value[3];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['hero']->value[4];?>
</li>
    </ul>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['dx'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['xh'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['nd'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['bg'];?>
</li>
    </ul>
    <hr>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['dx'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['xh'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['nd'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['weapon']->value['bg'];?>
</li>
    </ul>
    <p><?php echo time();?>
</p>
    <p><?php echo $_SERVER['SERVER_NAME'];?>
</p>
    <p><?php echo 'Smarty-3.1.16';?>
</p>
    <p><?php echo @constant('ROOT');?>
</p>
    <?php  $_config = new Smarty_Internal_Config('site.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars('chongyang', 'local'); ?>
    
    <footer style="color:<?php echo $_smarty_tpl->getConfigVariable('color');?>
"><?php echo $_smarty_tpl->getConfigVariable('copyright');?>
</footer>
    <footer><?php echo $_smarty_tpl->getConfigVariable('police');?>
</footer>
</body>
</html><?php }} ?>
