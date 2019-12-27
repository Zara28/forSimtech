<?php /* Smarty version Smarty-3.1.21, created on 2019-12-23 22:30:49
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\my_condition\hooks\products\categories_section.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156585dffa8014f5b92-52285092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba60315ee8a6be9a0dbc735ac931b61f05e9cc1' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\my_condition\\hooks\\products\\categories_section.pre.tpl',
      1 => 1577129444,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156585dffa8014f5b92-52285092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5dffa801567028_58545863',
  'variables' => 
  array (
    'disable_selectors' => 0,
    'condition' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dffa801567028_58545863')) {function content_5dffa801567028_58545863($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_condition.selectbox','my_condition.d','my_condition.p','my_condition.g','my_condition.a','my_condition.e'));
?>
<div class="control-group">
                        <label class="control-label" for="Condition"><?php echo $_smarty_tpl->__("my_condition.selectbox");?>
</label>
                        <div class="controls">
                            <select class="span3" name="product_data[selectbox]" id="product_selectbox" <?php if ($_smarty_tpl->tpl_vars['disable_selectors']->value) {?>disabled="disabled"<?php }?>>
                                <option value="destroyed" <?php if ($_smarty_tpl->tpl_vars['condition']->value['product']=="destroyed") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("my_condition.d");?>
</option>
                                <option value="poor" <?php if ($_smarty_tpl->tpl_vars['condition']->value['product']=="poor") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("my_condition.p");?>
</option>
                                <option value="good"<?php if ($_smarty_tpl->tpl_vars['condition']->value['product']=="good") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("my_condition.g");?>
</option>
                                <option value="average" <?php if ($_smarty_tpl->tpl_vars['condition']->value['product']=="average") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("my_condition.a");?>
</option>
                                <option value="excellent" <?php if ($_smarty_tpl->tpl_vars['condition']->value['product']=="excellent") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("my_condition.e");?>
</option>
                            </select>
                            <!--<input type "product_data[selectbox]">-->
                        </div><?php }} ?>
