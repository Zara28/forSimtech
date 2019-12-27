<?php /* Smarty version Smarty-3.1.21, created on 2019-12-21 22:34:51
         compiled from "W:\domains\localhost\mod\design\backend\templates\common\previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125585dfe73db327017-76174268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71832494dbee5e1544ab47c0632b31625431c92' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1576435343,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125585dfe73db327017-76174268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5dfe73db33a892_38744532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfe73db33a892_38744532')) {function content_5dfe73db33a892_38744532($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'W:/domains/localhost/mod/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
