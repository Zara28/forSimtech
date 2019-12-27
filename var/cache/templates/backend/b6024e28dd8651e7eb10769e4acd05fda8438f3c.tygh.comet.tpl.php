<?php /* Smarty version Smarty-3.1.21, created on 2019-12-15 22:57:24
         compiled from "W:\domains\localhost\mod\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88405df69024b4c392-79372062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6024e28dd8651e7eb10769e4acd05fda8438f3c' => 
    array (
      0 => 'W:\\domains\\localhost\\mod\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1576435339,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '88405df69024b4c392-79372062',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5df69024b50212_26422950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5df69024b50212_26422950')) {function content_5df69024b50212_26422950($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
