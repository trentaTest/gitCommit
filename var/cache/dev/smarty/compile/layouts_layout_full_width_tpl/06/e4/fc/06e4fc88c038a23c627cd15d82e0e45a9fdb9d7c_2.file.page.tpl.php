<?php
/* Smarty version 3.1.33, created on 2020-11-27 13:03:55
  from 'F:\www\wamp64\www\gitcommit\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc0eb2b1bc961_60877729',
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
function content_5fc0eb2b1bc961_60877729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4825548975fc0eb2b1a5ba0_64465920', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20979574745fc0eb2b1a9601_91465251 extends Smarty_Internal_Block
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
class Block_646799635fc0eb2b1a74e4_01069815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20979574745fc0eb2b1a9601_91465251', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15297888145fc0eb2b1b1473_32156452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7775960905fc0eb2b1b37b6_13352749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20752406415fc0eb2b1afb28_70434175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15297888145fc0eb2b1b1473_32156452', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7775960905fc0eb2b1b37b6_13352749', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16616113615fc0eb2b1b8645_65796787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4106939495fc0eb2b1b6dd5_69588678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16616113615fc0eb2b1b8645_65796787', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4825548975fc0eb2b1a5ba0_64465920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4825548975fc0eb2b1a5ba0_64465920',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_646799635fc0eb2b1a74e4_01069815',
  ),
  'page_title' => 
  array (
    0 => 'Block_20979574745fc0eb2b1a9601_91465251',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20752406415fc0eb2b1afb28_70434175',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15297888145fc0eb2b1b1473_32156452',
  ),
  'page_content' => 
  array (
    0 => 'Block_7775960905fc0eb2b1b37b6_13352749',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4106939495fc0eb2b1b6dd5_69588678',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16616113615fc0eb2b1b8645_65796787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646799635fc0eb2b1a74e4_01069815', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20752406415fc0eb2b1afb28_70434175', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4106939495fc0eb2b1b6dd5_69588678', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
