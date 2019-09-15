<?php
/* Smarty version 3.1.33, created on 2019-01-06 12:51:49
  from '/opt/lampp/htdocs/mon_ecom/admin627zvwxib/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c31f9e59b07f6_92153441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7fe97a4898242ee871eb1dc6dd5939e0dc97eb' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin627zvwxib/themes/default/template/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c31f9e59b07f6_92153441 (Smarty_Internal_Template $_smarty_tpl) {
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
