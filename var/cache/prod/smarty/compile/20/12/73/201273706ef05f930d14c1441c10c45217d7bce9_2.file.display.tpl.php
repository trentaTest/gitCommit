<?php
/* Smarty version 3.1.33, created on 2020-11-24 16:53:16
  from 'F:\www\wamp64\www\gitcommit\modules\vm_gitcommit\views\templates\hook\display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbd2c6c9a8b24_80791014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201273706ef05f930d14c1441c10c45217d7bce9' => 
    array (
      0 => 'F:\\www\\wamp64\\www\\gitcommit\\modules\\vm_gitcommit\\views\\templates\\hook\\display.tpl',
      1 => 1606225534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd2c6c9a8b24_80791014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17378986505fbd2c6c9a0c13_64542826', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_17378986505fbd2c6c9a0c13_64542826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17378986505fbd2c6c9a0c13_64542826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div><?php echo htmlspecialchars(var_dump($_smarty_tpl->tpl_vars['gitCommit']->value), ENT_QUOTES, 'UTF-8');?>
</div>
<?php
}
}
/* {/block "page_content"} */
}
