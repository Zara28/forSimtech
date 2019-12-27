<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:15
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135465df6910b5d2a18-58115849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74dfdcce9226689dec4423282acebfc4e75d7279' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1576435295,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135465df6910b5d2a18-58115849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df6910b5de592_18503619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df6910b5de592_18503619')) {function content_5df6910b5de592_18503619($_smarty_tpl) {?><div class="hidden" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
