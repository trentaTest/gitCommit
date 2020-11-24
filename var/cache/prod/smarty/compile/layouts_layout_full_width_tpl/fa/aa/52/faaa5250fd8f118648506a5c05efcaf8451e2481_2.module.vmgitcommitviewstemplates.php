<?php
/* Smarty version 3.1.33, created on 2020-11-24 20:48:06
  from 'module:vmgitcommitviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fbd637600bed5_26142483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faaa5250fd8f118648506a5c05efcaf8451e2481' => 
    array (
      0 => 'module:vmgitcommitviewstemplates',
      1 => 1606247284,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd637600bed5_26142483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
  
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17593491485fbd6375f38a71_13830749', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_17593491485fbd6375f38a71_13830749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17593491485fbd6375f38a71_13830749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div><?php echo htmlspecialchars(var_dump($_smarty_tpl->tpl_vars['gitCommit']->value), ENT_QUOTES, 'UTF-8');?>
</div>
    <ul>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of products','d'=>'Modules.Vm_GitCommit'),$_smarty_tpl ) );?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_product']->value, ENT_QUOTES, 'UTF-8');?>

        </li>
        <li>
            Categories:
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </li>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8');?>
</li>
    </ul>
<?php
}
}
/* {/block "page_content"} */
}
