<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 22:59:57
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\product_variations\hooks\products\product_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150485df690bd5bd4b5-83100697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daea0dbc63ba3a996b3efbcfe7b96fe9e3153ee4' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\product_additional_info.pre.tpl',
      1 => 1576435289,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150485df690bd5bd4b5-83100697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690bd5c9045_08232453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690bd5c9045_08232453')) {function content_5df690bd5c9045_08232453($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php }} ?>
