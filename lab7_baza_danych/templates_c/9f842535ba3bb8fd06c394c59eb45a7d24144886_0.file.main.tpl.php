<?php
/* Smarty version 4.3.2, created on 2024-04-24 20:54:28
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab6b_routing\app\view\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66295564b4eeb1_12159691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f842535ba3bb8fd06c394c59eb45a7d24144886' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab6b_routing\\app\\view\\templates\\main.tpl',
      1 => 1713726904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66295564b4eeb1_12159691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82544762866295564b4e747_25930190', 'content');
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
class Block_82544762866295564b4e747_25930190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82544762866295564b4e747_25930190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
To ma dzialac<?php
}
}
/* {/block 'content'} */
}
