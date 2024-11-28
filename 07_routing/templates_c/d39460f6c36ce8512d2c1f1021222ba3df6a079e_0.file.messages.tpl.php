<?php
/* Smarty version 4.5.1, created on 2024-04-21 12:47:48
  from 'C:\xampp\htdocs\07_role\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6624eed4f0eb00_56861575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39460f6c36ce8512d2c1f1021222ba3df6a079e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_role\\app\\views\\templates\\messages.tpl',
      1 => 1713696135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6624eed4f0eb00_56861575 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <p class="emoji">&#128531</p>
  <h4>Wystąpiły błędy:</h4>
  <ol class="err">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ol>
<?php }
}
}
