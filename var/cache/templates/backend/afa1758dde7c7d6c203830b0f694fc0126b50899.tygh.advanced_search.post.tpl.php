<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:08
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\product_variations\hooks\products\advanced_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89735df690c8c11088-56535439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa1758dde7c7d6c203830b0f694fc0126b50899' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\advanced_search.post.tpl',
      1 => 1576435289,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '89735df690c8c11088-56535439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_product_type_filter' => 0,
    'show_product_parent_filter' => 0,
    'app' => 0,
    'product_types' => 0,
    'product_type' => 0,
    'search' => 0,
    'product_type_name' => 0,
    'item_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690c8cb9039_01920882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690c8cb9039_01920882')) {function content_5df690c8cb9039_01920882($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'W:/domains/localhost/mod/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.product_type','product_variations.belongs_to_catalog_item'));
?>
<?php $_smarty_tpl->tpl_vars['show_product_type_filter'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_product_type_filter']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_product_parent_filter'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_product_parent_filter']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <?php if ($_smarty_tpl->tpl_vars['show_product_type_filter']->value) {?>
            <div class="control-group">
                <label class="control-label" for="product_type"><?php echo $_smarty_tpl->__("product_variations.product_type");?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->tpl_vars['product_types'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value["addons.product_variations.product.type.type_collection"]->getTypeNames(), null, 0);?>

                    <input type="hidden" name="product_type" id="product_type">
                    <select name="product_type[]" id="product_type" multiple>
                        <?php  $_smarty_tpl->tpl_vars['product_type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['product_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_type_name']->key => $_smarty_tpl->tpl_vars['product_type_name']->value) {
$_smarty_tpl->tpl_vars['product_type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['product_type']->value = $_smarty_tpl->tpl_vars['product_type_name']->key;
?>
                            <option <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['product_type']->value,$_smarty_tpl->tpl_vars['search']->value['product_type'])) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_product_parent_filter']->value) {?>
            <div class="control-group">
                <label class="control-label" for="parent_product_id"><?php echo $_smarty_tpl->__("product_variations.belongs_to_catalog_item");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_product_id']) {?>
                        <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['parent_product_id'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(null, null, 0);?>
                    <?php }?>

                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"parent_product_id",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'type'=>"links",'no_container'=>true,'picker_view'=>true), 0);?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }} ?>
