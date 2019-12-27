<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:02
         compiled from "W:\domains\localhost\mod\design\backend\templates\buttons\save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166585df690c2610734-05257559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fdba595ce1ee41534532e6bb3b259ee0f26975' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\buttons\\save.tpl',
      1 => 1576435336,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166585df690c2610734-05257559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690c262fb33_39156327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690c262fb33_39156327')) {function content_5df690c262fb33_39156327($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
