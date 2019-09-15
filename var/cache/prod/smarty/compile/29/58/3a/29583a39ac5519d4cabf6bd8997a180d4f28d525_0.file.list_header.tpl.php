<?php
/* Smarty version 3.1.33, created on 2019-09-09 23:04:00
  from '/opt/lampp/htdocs/mon_ecom/admin692fovuk9/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d76da60a0a148_59112019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29583a39ac5519d4cabf6bd8997a180d4f28d525' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin692fovuk9/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1544708327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d76da60a0a148_59112019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3093870425d76da60a006b2_85257268', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_3093870425d76da60a006b2_85257268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_3093870425d76da60a006b2_85257268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
