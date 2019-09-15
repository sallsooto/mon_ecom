<?php
/* Smarty version 3.1.33, created on 2019-01-23 11:17:38
  from '/opt/lampp/htdocs/mon_ecom/admin240rxdyc0/themes/default/template/controllers/currencies/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c484d5223ab11_60947597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a5026c717396897ff13d3f469a83f2d7d70dbc7' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin240rxdyc0/themes/default/template/controllers/currencies/status.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c484d5223ab11_60947597 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Admin.Global'),$_smarty_tpl ) );?>

				<div id="currencyStatus" class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
					<label>
						<input type="checkbox" <?php echo 1 == $_smarty_tpl->tpl_vars['status']->value ? 'checked="checked"' : '';?>
><span></span>
					</label>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="status disabled <?php echo 0 == $_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This currency is disabled",'d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</span>
			<span class="status enabled <?php echo 1 == $_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This currency is enabled",'d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</span>
		</div>
	</div>
</div>
<?php }
}
