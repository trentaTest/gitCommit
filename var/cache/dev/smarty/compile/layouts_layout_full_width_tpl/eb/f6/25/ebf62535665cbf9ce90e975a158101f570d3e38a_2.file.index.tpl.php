<?php
/* Smarty version 3.1.33, created on 2020-11-27 13:03:55
  from 'F:\www\wamp64\www\gitcommit\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc0eb2b086b55_83376696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebf62535665cbf9ce90e975a158101f570d3e38a' => 
    array (
      0 => 'F:\\www\\wamp64\\www\\gitcommit\\themes\\classic\\templates\\index.tpl',
      1 => 1605710234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc0eb2b086b55_83376696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_674409535fc0eb2b0734a3_57767425', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17515356535fc0eb2b0757a0_80541910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_11621971275fc0eb2b07e0f7_01225521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3309747085fc0eb2b07a574_99353912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11621971275fc0eb2b07e0f7_01225521', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_674409535fc0eb2b0734a3_57767425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_674409535fc0eb2b0734a3_57767425',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17515356535fc0eb2b0757a0_80541910',
  ),
  'page_content' => 
  array (
    0 => 'Block_3309747085fc0eb2b07a574_99353912',
  ),
  'hook_home' => 
  array (
    0 => 'Block_11621971275fc0eb2b07e0f7_01225521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17515356535fc0eb2b0757a0_80541910', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3309747085fc0eb2b07a574_99353912', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
