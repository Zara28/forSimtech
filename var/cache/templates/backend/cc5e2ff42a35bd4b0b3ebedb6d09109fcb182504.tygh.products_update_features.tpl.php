<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:12
         compiled from "W:\domains\localhost\mod\design\backend\templates\views\products\components\products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:327195df69108996dc3-97172681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc5e2ff42a35bd4b0b3ebedb6d09109fcb182504' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\views\\products\\components\\products_update_features.tpl',
      1 => 1576435393,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '327195df69108996dc3-97172681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_features' => 0,
    'features_search' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69108a13dd8_98394676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69108a13dd8_98394676')) {function content_5df69108a13dd8_98394676($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_features']->value) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value), 0);?>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('search'=>$_smarty_tpl->tpl_vars['features_search']->value,'div_id'=>"product_features_pagination_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'current_url'=>fn_url("products.get_features?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&items_per_page=".((string)$_smarty_tpl->tpl_vars['features_search']->value['items_per_page'])),'disable_history'=>true), 0);?>


<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
