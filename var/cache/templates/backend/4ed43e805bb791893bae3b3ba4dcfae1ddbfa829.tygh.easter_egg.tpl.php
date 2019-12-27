<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:00
         compiled from "W:\domains\localhost\mod\design\backend\templates\components\easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59595df690c0ee1f13-37652323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ed43e805bb791893bae3b3ba4dcfae1ddbfa829' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\components\\easter_egg.tpl',
      1 => 1576435348,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59595df690c0ee1f13-37652323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690c0ee9c15_30140188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690c0ee9c15_30140188')) {function content_5df690c0ee9c15_30140188($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
