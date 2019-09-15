<?php
/* Smarty version 3.1.33, created on 2018-12-28 12:09:15
  from '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/helpers/tree/tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c26126b331868_39099887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a620e05062284d12aa8559a604a07429e3fd102c' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1544708327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c26126b331868_39099887 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
