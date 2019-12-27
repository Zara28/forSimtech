<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 23:00:56
         compiled from "W:\domains\localhost\mod\design\backend\templates\common\select2\components\object_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270645df690f8755086-26699029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca84201fb96ba688acc98c722c1a9e104ab25c0' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\common\\select2\\components\\object_result.tpl',
      1 => 1576435348,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '270645df690f8755086-26699029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'content_pre' => 0,
    'prefix' => 0,
    'content' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df690f87b2c99_85980810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df690f87b2c99_85980810')) {function content_5df690f87b2c99_85980810($_smarty_tpl) {?><div class="object-selector-result-wrapper">
    <span class="object-selector-result">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="object-selector-result__icon-wrapper">
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
 object-selector-result__icon"></i>
            </span>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content_pre']->value;?>

        <span class="object-selector-result__text"><span class="object-selector-result__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span class="object-selector-result__body">[text]</span></span>
        <span class="object-selector-result__append">[append]</span>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
        <div class="object-selector-result__help">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div><?php }} ?>
