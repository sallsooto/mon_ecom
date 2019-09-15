<?php
/* Smarty version 3.1.33, created on 2018-12-22 22:21:16
  from '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1eb8dc748320_94110937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e2332bcb204155c9f38346aab64a14b47122f0' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1544708330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1eb8dc748320_94110937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11104758465c1eb8dc7413b8_68797750', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_11104758465c1eb8dc7413b8_68797750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11104758465c1eb8dc7413b8_68797750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
