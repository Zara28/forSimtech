<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:55
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\product_variations\hooks\products\update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281905df690f700d6b8-53953887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8ed387fab688d7ab83b8d4723830eb5787f2a8' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1576435291,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '281905df690f700d6b8-53953887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_product_data' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690f7024dc9_39912755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690f7024dc9_39912755')) {function content_5df690f7024dc9_39912755($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.variation_of_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_product_data']->value) {?>
    <div class="control-group">
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['variation_name']));?>

            </p>
        </div>
    </div>
<?php }?><?php }} ?>
