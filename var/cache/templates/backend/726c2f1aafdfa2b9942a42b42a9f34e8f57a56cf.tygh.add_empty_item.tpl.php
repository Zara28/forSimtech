<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:12
         compiled from "W:\domains\localhost\mod\design\backend\templates\buttons\add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244355df69108210f71-95316067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726c2f1aafdfa2b9942a42b42a9f34e8f57a56cf' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1576435334,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '244355df69108210f71-95316067',
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
  'unifunc' => 'content_5df69108220988_21359536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69108220988_21359536')) {function content_5df69108220988_21359536($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
