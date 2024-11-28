<?php
/* Smarty version 4.5.1, created on 2024-03-21 16:43:59
  from 'C:\xampp\htdocs\04_szablonowanie_smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65fc55bf241ec4_85544599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e06651e68b0e21e4931c64369b06b25aed5d5c71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_szablonowanie_smarty\\templates\\main.tpl',
      1 => 1711028922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fc55bf241ec4_85544599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_page_title']->value ?? null : $tmp);?>
</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_page_description']->value ?? null : $tmp);?>
">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
	</head>
	<body class="is-preload">
	  <div id="wrapper">
      <div class="top">
        <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20969168165fc55bf23ec70_59661431', 'header');
?>

        </header>
        <nav id="menu">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45670532265fc55bf23f4c3_29584862', 'menu');
?>

        </nav>
        <div class="title">
          <header class="major">
            <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_page_title']->value ?? null : $tmp);?>
</h1>
            <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_page_description']->value ?? null : $tmp);?>
</p>
          </header>
          <hr class="major" />
        </div>
      </div>
      <div id="main" class="middle alt">
        <div class="inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65716755765fc55bf240882_53087165', "content");
?>

        </div>
      </div>
      <footer id="footer">
        <div class="inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109876850665fc55bf240ef4_62894823', "footer");
?>

        </div>
      </footer>
    </div>
<!-- Scripts -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'header'} */
class Block_20969168165fc55bf23ec70_59661431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_20969168165fc55bf23ec70_59661431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
" class="logo"><strong>MM</strong>MM</a>
          <nav>
            <a href="#menu">Menu</a>
          </nav>
        <?php
}
}
/* {/block 'header'} */
/* {block 'menu'} */
class Block_45670532265fc55bf23f4c3_29584862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_45670532265fc55bf23f4c3_29584862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <ul class="links">
            <li><a href="https://github.com/MiloszMogielski">Repozytorium</a></li>
          </ul>
        <?php
}
}
/* {/block 'menu'} */
/* {block "content"} */
class Block_65716755765fc55bf240882_53087165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65716755765fc55bf240882_53087165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <p>Ta strona jest pusta!</p>
        <?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_109876850665fc55bf240ef4_62894823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_109876850665fc55bf240ef4_62894823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="https://github.com/MiloszMogielski" class="icon brands alt fa-github" target="_blank" rel="noopener"><span class="label">GitHub</span></a>
          <ul class="copyright">
            <li>&copy; AC</li>
            <li>AUTOR: Miłosz Mogielski</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
          </ul>
        <?php
}
}
/* {/block "footer"} */
}
