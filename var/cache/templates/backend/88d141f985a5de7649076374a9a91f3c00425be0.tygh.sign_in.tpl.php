<?php /* Smarty version Smarty-3.1.21, created on 2019-12-21 21:00:17
         compiled from "W:\domains\localhost\mod\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175425dfe5db1839c67-31146320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88d141f985a5de7649076374a9a91f3c00425be0' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1576435337,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175425dfe5db1839c67-31146320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5dfe5db184d4e6_73474626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfe5db184d4e6_73474626')) {function content_5dfe5db184d4e6_73474626($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
