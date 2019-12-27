<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:04
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\product_variations\hooks\products\update_product_tax_ids.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71435df69100a2d6c8-81728532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5155513174d99667b22d6a90cdfdff948f099daa' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_tax_ids.override.tpl',
      1 => 1576435292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '71435df69100a2d6c8-81728532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69100a353c7_80145779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69100a353c7_80145779')) {function content_5df69100a353c7_80145779($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tax_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
