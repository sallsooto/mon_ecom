<?php
/* Smarty version 3.1.33, created on 2019-01-23 11:17:25
  from '/opt/lampp/htdocs/mon_ecom/admin240rxdyc0/themes/default/template/controllers/currencies/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c484d4581e522_47542788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91bf39056b35dfbed837ed59617a31263f0c3c40' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin240rxdyc0/themes/default/template/controllers/currencies/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/currencies/status.tpl' => 1,
    'file:controllers/currencies/conversion_rate.tpl' => 1,
  ),
),false)) {
function content_5c484d4581e522_47542788 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
	</div>
</div>
<?php }
}
