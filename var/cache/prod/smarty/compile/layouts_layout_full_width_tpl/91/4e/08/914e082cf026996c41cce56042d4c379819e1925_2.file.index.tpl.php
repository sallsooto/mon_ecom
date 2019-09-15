<?php
/* Smarty version 3.1.33, created on 2018-12-21 13:06:16
  from '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1ce5481f1619_28031692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914e082cf026996c41cce56042d4c379819e1925' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/index.tpl',
      1 => 1544708330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1ce5481f1619_28031692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8095041695c1ce5481e6dd2_29242724', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13224113875c1ce5481ea721_47478207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12164925165c1ce5481ed793_10218571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10351761915c1ce5481ec713_53763928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12164925165c1ce5481ed793_10218571', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8095041695c1ce5481e6dd2_29242724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8095041695c1ce5481e6dd2_29242724',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13224113875c1ce5481ea721_47478207',
  ),
  'page_content' => 
  array (
    0 => 'Block_10351761915c1ce5481ec713_53763928',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12164925165c1ce5481ed793_10218571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13224113875c1ce5481ea721_47478207', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10351761915c1ce5481ec713_53763928', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
