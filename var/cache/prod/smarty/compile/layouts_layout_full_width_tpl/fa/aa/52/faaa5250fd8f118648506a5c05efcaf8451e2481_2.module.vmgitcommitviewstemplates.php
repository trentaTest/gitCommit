<?php
/* Smarty version 3.1.33, created on 2020-11-20 20:47:24
  from 'module:vmgitcommitviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb81d4c6b6e39_45027924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faaa5250fd8f118648506a5c05efcaf8451e2481' => 
    array (
      0 => 'module:vmgitcommitviewstemplates',
      1 => 1605901603,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb81d4c6b6e39_45027924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1095894135fb81d4c6a6fb7_12552568', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_1095894135fb81d4c6a6fb7_12552568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1095894135fb81d4c6a6fb7_12552568',
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
