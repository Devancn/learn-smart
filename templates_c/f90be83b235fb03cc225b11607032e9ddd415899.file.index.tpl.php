<?php /* Smarty version Smarty-3.1.16, created on 2016-05-04 22:49:05
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28184572a01c7890623-32788969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1462373343,
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
<?php if ($_valid && !is_callable('content_572a01c78b7721_58180907')) {function content_572a01c78b7721_58180907($_smarty_tpl) {?><!DOCTYPE html>
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
    <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
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
</body>
</html><?php }} ?>
