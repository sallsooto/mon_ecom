<?php
/* Smarty version 3.1.33, created on 2018-12-28 12:09:15
  from '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c26126b364862_45957722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89189fbbdb02a62d94f334b7cb468dacc5a07a3' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin018zjrud5/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1544708327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c26126b364862_45957722 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
