<?php /* Smarty version Smarty-3.1.21, created on 2019-12-22 13:14:59
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\new addon\hooks\products\detailed_content_copy.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46985dff3275023808-18535719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af91be4afba9546f98ae134b1461adee8c4e5cd5' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\new addon\\hooks\\products\\detailed_content_copy.pre.tpl',
      1 => 1577009688,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '46985dff3275023808-18535719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5dff3275027687_48891657',
  'variables' => 
  array (
    'disable_selectors' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dff3275027687_48891657')) {function content_5dff3275027687_48891657($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('simultaneous','sequential'));
?>
                 <div class="control-group">
                        <label class="control-label" for="Condition"><?php echo $_smarty_tpl->__("new addon.selectbox");?>
</label>
                        <div class="controls">
                            <select class="span3" name="product_data[selectbox]" id="product_selectbox" <?php if ($_smarty_tpl->tpl_vars['disable_selectors']->value) {?>disabled="disabled"<?php }?>>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['options_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("simultaneous");?>
</option>
                                <option value="S" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['options_type']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("sequential");?>
</option>
                            </select>
                        </div>
                  <?php }} ?>
