<?php
/* Smarty version 3.1.33, created on 2019-09-09 22:48:57
  from '/opt/lampp/htdocs/mon_ecom/admin692fovuk9/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d76d6d903d0a5_89589061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d4f3530b0294c50edc2246b3857a162d671d77' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin692fovuk9/themes/default/template/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d76d6d903d0a5_89589061 (Smarty_Internal_Template $_smarty_tpl) {
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
