<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 22:57:25
         compiled from "W:\domains\localhost\mod\design\backend\templates\addons\paypal\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44455df69025b4c721-64006143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55e931b454291b4ca3eb74d9727621b331e75f16' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\addons\\paypal\\hooks\\index\\scripts.post.tpl',
      1 => 1576435285,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '44455df69025b4c721-64006143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69025b5ffb0_02448584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69025b5ffb0_02448584')) {function content_5df69025b5ffb0_02448584($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'W:/domains/localhost/mod/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'W:/domains/localhost/mod/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','description','addons.paypal.display_name','addons.paypal.display_description'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.tr({
            name: '<?php echo $_smarty_tpl->__("name");?>
',
            description: '<?php echo $_smarty_tpl->__("description");?>
',
            addons_paypal_display_name: '<?php echo $_smarty_tpl->__("addons.paypal.display_name");?>
',
            addons_paypal_display_description: '<?php echo $_smarty_tpl->__("addons.paypal.display_description");?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/addons/paypal/payment_configurator.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/paypal/integrated_signup.js"),$_smarty_tpl);?>
<?php }} ?>
