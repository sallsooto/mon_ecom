<?php
/* Smarty version 3.1.33, created on 2019-01-06 12:54:58
  from '/opt/lampp/htdocs/mon_ecom/admin627zvwxib/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c31faa2d8cd18_90127168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4a9ca42d088f4346276247c2d0324fa498fbc2' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/admin627zvwxib/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1544708326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c31faa2d8cd18_90127168 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
