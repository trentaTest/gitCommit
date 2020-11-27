<?php
/* Smarty version 3.1.33, created on 2020-11-27 11:36:42
  from 'F:\www\wamp64\www\gitcommit\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc0d6ba1d9e95_74848118',
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
function content_5fc0d6ba1d9e95_74848118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3838497395fc0d6ba17c739_26180481', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4275433635fc0d6ba180399_98998604 extends Smarty_Internal_Block
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
class Block_2283260185fc0d6ba17e484_00281423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4275433635fc0d6ba180399_98998604', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11594954835fc0d6ba1cf1c0_95069514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7171646495fc0d6ba1d1582_67638476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_927834155fc0d6ba1cd868_11510465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11594954835fc0d6ba1cf1c0_95069514', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7171646495fc0d6ba1d1582_67638476', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1225602215fc0d6ba1d6431_54843619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_460808465fc0d6ba1d4c50_08321453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225602215fc0d6ba1d6431_54843619', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3838497395fc0d6ba17c739_26180481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3838497395fc0d6ba17c739_26180481',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2283260185fc0d6ba17e484_00281423',
  ),
  'page_title' => 
  array (
    0 => 'Block_4275433635fc0d6ba180399_98998604',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_927834155fc0d6ba1cd868_11510465',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11594954835fc0d6ba1cf1c0_95069514',
  ),
  'page_content' => 
  array (
    0 => 'Block_7171646495fc0d6ba1d1582_67638476',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_460808465fc0d6ba1d4c50_08321453',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1225602215fc0d6ba1d6431_54843619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2283260185fc0d6ba17e484_00281423', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_927834155fc0d6ba1cd868_11510465', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_460808465fc0d6ba1d4c50_08321453', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
