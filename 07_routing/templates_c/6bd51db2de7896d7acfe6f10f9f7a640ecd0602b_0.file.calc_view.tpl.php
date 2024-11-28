<?php
/* Smarty version 4.5.1, created on 2024-03-31 23:30:43
  from 'C:\xampp\htdocs\06a_nowa_struktura\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6609d603494294_87260744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd51db2de7896d7acfe6f10f9f7a640ecd0602b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06a_nowa_struktura\\app\\views\\calc_view.tpl',
      1 => 1711920541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6609d603494294_87260744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9575268716609d6033e14e2_69824162', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11940684626609d60340f1f2_48152405', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_9575268716609d6033e14e2_69824162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_9575268716609d6033e14e2_69824162',
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
class Block_11940684626609d60340f1f2_48152405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11940684626609d60340f1f2_48152405',
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
