<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:06
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\product_variations\hooks\products\update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135685df69102edd282-02718017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a837cdc3a149353f8efd07f0879711ff1512c72' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_avail_since.override.tpl',
      1 => 1576435290,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135685df69102edd282-02718017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69102ee8e07_76618180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69102ee8e07_76618180')) {function content_5df69102ee8e07_76618180($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
