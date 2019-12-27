<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 22:59:52
         compiled from "W:\domains\localhost\mod\design\backend\templates\views\products\components\bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217475df690b8873885-07080064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684b90b3673980d5638c417c7960b45e51b33323' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\views\\products\\components\\bulk_edit.tpl',
      1 => 1576435391,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '217475df690b8873885-07080064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690b8923522_10262015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690b8923522_10262015')) {function content_5df690b8923522_10262015($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'W:/domains/localhost/mod/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','category','price','status','edit_selected','actions'));
?>
<div class="bulk-edit clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
            <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                   type="checkbox" 
                   checked 
                   data-ca-bulkedit-toggler="true"
                   data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                   data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
            />
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

        </li>

        <?php if (fn_check_view_permissions("products.m_update_prices")) {?>
        <li class="btn bulk-edit__btn bulk-edit__btn--category dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--category" data-toggle=".bulk-edit-categories-content"><?php echo $_smarty_tpl->__("category");?>
 <span class="caret mobile-hide"></span></span>

            <div class="bulk-edit--reset-dropdown-menu bulk-edit-categories-content">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </li>
        <?php }?>

        <?php if (fn_check_view_permissions("products.m_update_prices")) {?>
        <li class="btn bulk-edit__btn bulk-edit__btn--price dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("price");?>
 <span class="caret mobile-hide"></span></span>

            <div class="dropdown-menu bulk-edit--reset-dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </li>
        <?php }?>

        <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
            <span class="bulk-edit__btn-content">
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"manage_products_form"));?>

            </span>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
