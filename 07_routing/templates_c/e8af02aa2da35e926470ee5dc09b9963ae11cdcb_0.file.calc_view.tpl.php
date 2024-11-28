<?php
/* Smarty version 4.5.1, created on 2024-04-22 15:32:53
  from 'C:\xampp\htdocs\07_routing\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_662667057a5062_00151380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8af02aa2da35e926470ee5dc09b9963ae11cdcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_routing\\app\\views\\calc_view.tpl',
      1 => 1713698327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662667057a5062_00151380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94041543566266705686099_48884325', 'menu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_305561810662667056f8e24_98585724', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'menu'} */
class Block_94041543566266705686099_48884325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_94041543566266705686099_48884325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<span>Zalogowano: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</span>
	<ul class="links">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Strona główna</a></li>
		<li><a href="https://github.com/MiloszMogielski" target="_blank">Repozytorium</a></li>
	</ul>
	<ul class="actions stacked">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button fit">Wyloguj</a></li>
	</ul>
<?php
}
}
/* {/block 'menu'} */
/* {block 'content'} */
class Block_305561810662667056f8e24_98585724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_305561810662667056f8e24_98585724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
				<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
