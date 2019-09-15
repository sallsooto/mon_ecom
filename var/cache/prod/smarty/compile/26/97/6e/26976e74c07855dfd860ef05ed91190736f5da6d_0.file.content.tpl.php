<?php
/* Smarty version 3.1.33, created on 2018-12-28 11:54:26
  from '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c260ef25a9fc4_13699188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26976e74c07855dfd860ef05ed91190736f5da6d' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c260ef25a9fc4_13699188 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
