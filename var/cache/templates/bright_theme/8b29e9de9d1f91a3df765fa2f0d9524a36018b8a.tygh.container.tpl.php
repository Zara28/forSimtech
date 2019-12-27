<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 22:55:19
         compiled from "W:\domains\localhost\mod\design\themes\responsive\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292455df68fa74e6d49-78895480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b29e9de9d1f91a3df765fa2f0d9524a36018b8a' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1576439420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '292455df68fa74e6d49-78895480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df68fa74f6740_68858647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df68fa74f6740_68858647')) {function content_5df68fa74f6740_68858647($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
