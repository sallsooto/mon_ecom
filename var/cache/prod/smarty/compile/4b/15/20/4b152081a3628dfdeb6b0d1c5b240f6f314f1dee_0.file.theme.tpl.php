<?php
/* Smarty version 3.1.33, created on 2018-12-28 12:48:48
  from '/opt/lampp/htdocs/mon_ecom/modules/ps_mbo/views/templates/admin/theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c261bb0705f99_76376489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b152081a3628dfdeb6b0d1c5b240f6f314f1dee' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/modules/ps_mbo/views/templates/admin/theme.tpl',
      1 => 1544709863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c261bb0705f99_76376489 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
