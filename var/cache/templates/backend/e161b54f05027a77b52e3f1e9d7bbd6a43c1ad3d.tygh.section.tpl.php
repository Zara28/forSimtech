<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:01:21
         compiled from "W:\domains\localhost\mod\design\backend\templates\common\section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175675df6911156e672-90942688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e161b54f05027a77b52e3f1e9d7bbd6a43c1ad3d' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\common\\section.tpl',
      1 => 1576435344,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175675df6911156e672-90942688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69111595778_11635202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69111595778_11635202')) {function content_5df69111595778_11635202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'W:\\domains\\localhost\\mod\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
