<?php
/* Smarty version 3.1.33, created on 2018-12-22 22:22:54
  from '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/customer/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1eb93e7a29c9_03238851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07d0cf00996e5b55be85edde78195e023d2e853b' => 
    array (
      0 => '/opt/lampp/htdocs/mon_ecom/themes/classic/templates/customer/_partials/address-form.tpl',
      1 => 1544708331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5c1eb93e7a29c9_03238851 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6516561395c1eb93e7806a1_66543274', "address_form");
?>

<?php }
/* {block "address_form_url"} */
class Block_5560064315c1eb93e784208_77896065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
class Block_21023554835c1eb93e7978e6_88021993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_17303196965c1eb93e78d305_73059249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21023554835c1eb93e7978e6_88021993', 'form_field', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
class Block_4304236765c1eb93e78c235_54122813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17303196965c1eb93e78d305_73059249', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
class Block_6929528615c1eb93e79df69_65056999 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary float-xs-right" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
class Block_16930979845c1eb93e79ce40_87181356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6929528615c1eb93e79df69_65056999', 'form_buttons', $this->tplIndex);
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
class Block_6516561395c1eb93e7806a1_66543274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_6516561395c1eb93e7806a1_66543274',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_5560064315c1eb93e784208_77896065',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_4304236765c1eb93e78c235_54122813',
  ),
  'form_fields' => 
  array (
    0 => 'Block_17303196965c1eb93e78d305_73059249',
  ),
  'form_field' => 
  array (
    0 => 'Block_21023554835c1eb93e7978e6_88021993',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_16930979845c1eb93e79ce40_87181356',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_6929528615c1eb93e79df69_65056999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5560064315c1eb93e784208_77896065', "address_form_url", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4304236765c1eb93e78c235_54122813', "address_form_fields", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16930979845c1eb93e79ce40_87181356', "address_form_footer", $this->tplIndex);
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
