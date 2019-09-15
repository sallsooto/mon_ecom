<?php
/* Smarty version 3.1.33, created on 2018-12-21 12:52:56
  from '/opt/lampp/htdocs/mon_ecom/admin200vyu5na/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1ce228d93845_86358627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d43a674b067534ec963637a65b29969625bc9b' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin200vyu5na/themes/default/template/content.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1ce228d93845_86358627 (Smarty_Internal_Template $_smarty_tpl) {
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
