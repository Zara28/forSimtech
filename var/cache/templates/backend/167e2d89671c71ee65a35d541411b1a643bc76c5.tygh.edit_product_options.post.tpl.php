<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:21
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\yml_export\hooks\product_options\edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250245df69111343af5-60549767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167e2d89671c71ee65a35d541411b1a643bc76c5' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_options\\edit_product_options.post.tpl',
      1 => 1576435332,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '250245df69111343af5-60549767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df6911135b1f7_87835371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df6911135b1f7_87835371')) {function content_5df6911135b1f7_87835371($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
