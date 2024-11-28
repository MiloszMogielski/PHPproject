<?php
/* Smarty version 4.5.1, created on 2024-03-21 16:44:56
  from 'C:\xampp\htdocs\04_szablonowanie_smarty\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65fc55f8e94794_27221256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e458208e582a6b84d8d72837f43a212f6f3bef4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_szablonowanie_smarty\\app\\security\\login_view.tpl',
      1 => 1711027847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fc55f8e94794_27221256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89071509365fc55f8e87648_04508569', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_89071509365fc55f8e87648_04508569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89071509365fc55f8e87648_04508569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\04_szablonowanie_smarty\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" placeholder="username" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['login'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
			</div>
			<div class="field">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" placeholder="password">
			</div>
		</div>
		<div class="submit-button">
			<input type="submit" value="zaloguj" class="primary">
		</div>
	</form>
	<div class="messages">
				<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
			<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
				<p class="emoji">&#128531</p>
				<h4>Wystąpiły błędy:</h4>
				<ol class="err">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ol>
			<?php }?>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
