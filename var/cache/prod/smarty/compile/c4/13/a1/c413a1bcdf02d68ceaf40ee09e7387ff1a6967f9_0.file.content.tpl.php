<?php
/* Smarty version 3.1.33, created on 2018-12-22 21:50:18
  from '/opt/lampp/htdocs/mon_ecom/admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1eb19ad6fbd8_50944808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c413a1bcdf02d68ceaf40ee09e7387ff1a6967f9' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin/themes/default/template/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1eb19ad6fbd8_50944808 (Smarty_Internal_Template $_smarty_tpl) {
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
