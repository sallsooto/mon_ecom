<?php
/* Smarty version 3.1.33, created on 2019-01-23 11:42:49
  from '/opt/lampp/htdocs/mon_ecom/modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4853394fdf93_01400422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a5ff6345e104fe35f13e244de2e3a4fea5ae1e' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl',
      1 => 1544708329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4853394fdf93_01400422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10888231115c4853394ebac7_36374458', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_10888231115c4853394ebac7_36374458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_10888231115c4853394ebac7_36374458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'link') {?>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
</a>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
