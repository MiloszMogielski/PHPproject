<?php
/* Smarty version 4.5.1, created on 2024-04-01 17:03:33
  from 'C:\xampp\htdocs\06b_przestrzenie_nazw\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660accc51e8163_19224055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac13e0b6f27c7216727ae1086bbeac6c868dc8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06b_przestrzenie_nazw\\app\\views\\templates\\main.tpl',
      1 => 1711920569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660accc51e8163_19224055 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css"></noscript>
	</head>
	<body class="is-preload">
	  <div id="wrapper">
      <div class="top">
        <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587196779660accc51e34d4_66514475', 'header');
?>

        </header>
        <nav id="menu">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595721484660accc51e4114_15179740', 'menu');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951542241660accc51e5549_03679615', "content");
?>

        </div>
      </div>
      <footer id="footer">
        <div class="inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_570475918660accc51e5bd6_37494610', "footer");
?>

        </div>
      </footer>
    </div>
<!-- Scripts -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'header'} */
class Block_587196779660accc51e34d4_66514475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_587196779660accc51e34d4_66514475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
" class="logo"><strong>MM</strong>PBAW</a>
          <nav>
            <a href="#menu">Menu</a>
          </nav>
        <?php
}
}
/* {/block 'header'} */
/* {block 'menu'} */
class Block_595721484660accc51e4114_15179740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_595721484660accc51e4114_15179740',
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
class Block_1951542241660accc51e5549_03679615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1951542241660accc51e5549_03679615',
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
class Block_570475918660accc51e5bd6_37494610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_570475918660accc51e5bd6_37494610',
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
