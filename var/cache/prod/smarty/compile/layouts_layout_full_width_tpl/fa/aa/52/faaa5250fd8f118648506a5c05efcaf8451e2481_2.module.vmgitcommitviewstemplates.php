<?php
/* Smarty version 3.1.33, created on 2020-11-18 18:13:39
  from 'module:vmgitcommitviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb55643c53920_86824641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faaa5250fd8f118648506a5c05efcaf8451e2481' => 
    array (
      0 => 'module:vmgitcommitviewstemplates',
      1 => 1605697159,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb55643c53920_86824641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6476203425fb55643c481e7_22959052', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_6476203425fb55643c481e7_22959052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_6476203425fb55643c481e7_22959052',
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
