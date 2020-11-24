<?php
/* Smarty version 3.1.33, created on 2020-11-24 16:53:16
  from 'F:\www\wamp64\www\gitcommit\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbd2c6cb5a2a4_01547285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e4fc88c038a23c627cd15d82e0e45a9fdb9d7c' => 
    array (
      0 => 'F:\\www\\wamp64\\www\\gitcommit\\themes\\classic\\templates\\page.tpl',
      1 => 1605710235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd2c6cb5a2a4_01547285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9048029415fbd2c6ca92608_67830492', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4576812175fbd2c6ca96150_28273883 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_855103735fbd2c6ca94038_62905136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4576812175fbd2c6ca96150_28273883', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8660289845fbd2c6cb3e242_30227350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5696987715fbd2c6cb448a9_95940404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5772765875fbd2c6cb3a293_63795463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8660289845fbd2c6cb3e242_30227350', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5696987715fbd2c6cb448a9_95940404', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_718070455fbd2c6cb50d77_37574313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11330978285fbd2c6cb4d129_95450345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718070455fbd2c6cb50d77_37574313', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9048029415fbd2c6ca92608_67830492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9048029415fbd2c6ca92608_67830492',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_855103735fbd2c6ca94038_62905136',
  ),
  'page_title' => 
  array (
    0 => 'Block_4576812175fbd2c6ca96150_28273883',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5772765875fbd2c6cb3a293_63795463',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8660289845fbd2c6cb3e242_30227350',
  ),
  'page_content' => 
  array (
    0 => 'Block_5696987715fbd2c6cb448a9_95940404',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11330978285fbd2c6cb4d129_95450345',
  ),
  'page_footer' => 
  array (
    0 => 'Block_718070455fbd2c6cb50d77_37574313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_855103735fbd2c6ca94038_62905136', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5772765875fbd2c6cb3a293_63795463', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11330978285fbd2c6cb4d129_95450345', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
