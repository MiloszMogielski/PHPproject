<?php
/* Smarty version 4.5.1, created on 2024-04-22 15:34:11
  from 'C:\xampp\htdocs\07_routing\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66266753025a55_58613853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b80580e7a97eb8452a631c647f4aacae7fba50c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\07_routing\\app\\views\\login_view.tpl',
      1 => 1713698210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66266753025a55_58613853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4588182966626675301ca71_56702431', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_4588182966626675301ca71_56702431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4588182966626675301ca71_56702431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" placeholder="username" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
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
	<div id="msgs" class="messages">
		<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
