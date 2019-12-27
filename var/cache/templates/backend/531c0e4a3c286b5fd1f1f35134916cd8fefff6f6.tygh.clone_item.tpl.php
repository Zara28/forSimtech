<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:12
         compiled from "W:\domains\localhost\mod\design\backend\templates\buttons\clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241125df69108238082-73779498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531c0e4a3c286b5fd1f1f35134916cd8fefff6f6' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\buttons\\clone_item.tpl',
      1 => 1576435335,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '241125df69108238082-73779498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df6910823fd88_16933185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df6910823fd88_16933185')) {function content_5df6910823fd88_16933185($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
