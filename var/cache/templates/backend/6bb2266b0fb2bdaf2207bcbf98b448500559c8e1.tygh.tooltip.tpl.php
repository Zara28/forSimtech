<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:06
         compiled from "W:\domains\localhost\mod\design\backend\templates\common\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103035df690c695d242-19906471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb2266b0fb2bdaf2207bcbf98b448500559c8e1' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\common\\tooltip.tpl',
      1 => 1576435347,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103035df690c695d242-19906471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690c6968dc4_45211685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690c6968dc4_45211685')) {function content_5df690c6968dc4_45211685($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
