<?php
/* Smarty version 4.3.2, created on 2024-04-09 20:10:27
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab5b_namespaces\app\view\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66158493927c11_42900756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3434a1628c527caface0a76b2e3a2959fe7d7e0' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab5b_namespaces\\app\\view\\templates\\main.tpl',
      1 => 1712611396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66158493927c11_42900756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/template/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/template/assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->root_path;?>
/index.php" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
		</header>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>NWM co podać jako nagłówek</h1>
					</header>

					<hr class="major" />

					<!-- Elements -->
					<div class="row gtr-200">
						<div class="col-6 col-12-medium">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159002627066158493927349_63488478', 'content');
?>

						</div>
					</div>

				</div>
			</section>

		</div>
		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="copyright">
					<li>&copy; Vitalii Kovtun</li>
					<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'content'} */
class Block_159002627066158493927349_63488478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159002627066158493927349_63488478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
To ma dzialac<?php
}
}
/* {/block 'content'} */
}
