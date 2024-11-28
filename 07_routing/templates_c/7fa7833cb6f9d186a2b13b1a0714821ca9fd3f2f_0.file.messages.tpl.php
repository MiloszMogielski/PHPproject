<?php
/* Smarty version 4.5.1, created on 2024-04-22 15:32:53
  from 'C:\xampp\htdocs\07_routing\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66266705ad3271_15897073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa7833cb6f9d186a2b13b1a0714821ca9fd3f2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_routing\\app\\views\\templates\\messages.tpl',
      1 => 1713696135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66266705ad3271_15897073 (Smarty_Internal_Template $_smarty_tpl) {
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
