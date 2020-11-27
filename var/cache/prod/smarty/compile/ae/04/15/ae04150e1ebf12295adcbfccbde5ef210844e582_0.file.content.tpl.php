<?php
/* Smarty version 3.1.33, created on 2020-11-27 12:59:47
  from 'F:\www\wamp64\www\gitcommit\admin7719fntrc\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc0ea33933d44_62041693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae04150e1ebf12295adcbfccbde5ef210844e582' => 
    array (
      0 => 'F:\\www\\wamp64\\www\\gitcommit\\admin7719fntrc\\themes\\default\\template\\content.tpl',
      1 => 1605901631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc0ea33933d44_62041693 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
