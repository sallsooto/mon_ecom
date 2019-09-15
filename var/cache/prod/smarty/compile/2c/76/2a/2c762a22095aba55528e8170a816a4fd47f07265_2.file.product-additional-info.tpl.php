<?php
/* Smarty version 3.1.33, created on 2018-12-22 22:26:19
  from '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1eba0bf229a7_82253883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c762a22095aba55528e8170a816a4fd47f07265' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1544708330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1eba0bf229a7_82253883 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
