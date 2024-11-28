<?php
/* Smarty version 4.5.1, created on 2024-03-31 15:07:13
  from 'C:\xampp\htdocs\05_obiektowosc\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660960015fc3d6_29304465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be2d958c22519ca8d698d49b6c093229c5d996d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\05_obiektowosc\\app\\security\\login_view.tpl',
      1 => 1711027847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660960015fc3d6_29304465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13214006246609600148e9a3_25703113', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_13214006246609600148e9a3_25703113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13214006246609600148e9a3_25703113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\05_obiektowosc\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
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
