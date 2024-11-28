<?php
/* Smarty version 4.5.1, created on 2024-04-01 17:03:33
  from 'C:\xampp\htdocs\06b_przestrzenie_nazw\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660accc50488c1_02219551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b9387893f52573dcda166320cc0e826f7607dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06b_przestrzenie_nazw\\app\\views\\calc_view.tpl',
      1 => 1711920541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660accc50488c1_02219551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185281256660accc4e277a7_43945358', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837898823660accc4e8f527_53551686', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_1185281256660accc4e277a7_43945358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1185281256660accc4e277a7_43945358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="links">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Strona główna</a></li>
		<li><a href="https://github.com/MiloszMogielski" target="_blank">Repozytorium</a></li>
	</ul>
	<ul class="actions stacked">
		<li><a href="#" class="button fit">Wyloguj</a></li>
	</ul>
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_1837898823660accc4e8f527_53551686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1837898823660accc4e8f527_53551686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_amount">Kwota [zł]:</label>
				<input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">
			</div>
			<div class="field">
				<label for="id_years">Liczba lat kredytowania:</label>
				<input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
			</div>
			<div class="field">
				<label for="id_interest">Oprocentowanie [%]:</label>
				<input id="id_interest" type="text" name="interestRate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interestRate;?>
">
			</div>
		</div>
		<div class="submit-button">
			<input type="submit" value="Oblicz" class="primary" />
		</div>
	</form>
	<div id="msgs" class="messages">
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
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
		<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
			<div class="result">
				<h4>Miesięczna rata wynosi:</h4>
				<p class="res">
					<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł
				</p>
			</div>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
