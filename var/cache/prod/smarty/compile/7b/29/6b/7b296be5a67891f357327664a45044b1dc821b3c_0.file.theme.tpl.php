<?php
/* Smarty version 3.1.33, created on 2018-12-22 21:33:04
  from '/opt/lampp/htdocs/mon_ecom/modules/ps_mbo/views/templates/admin/theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1ead904b5956_10308446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b296be5a67891f357327664a45044b1dc821b3c' => 
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
function content_5c1ead904b5956_10308446 (Smarty_Internal_Template $_smarty_tpl) {
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
