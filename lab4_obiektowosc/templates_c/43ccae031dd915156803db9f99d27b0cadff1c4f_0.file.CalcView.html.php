<?php
/* Smarty version 4.3.2, created on 2024-04-08 23:15:37
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab4_obiektowosc\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66145e79a02ed7_02244611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ccae031dd915156803db9f99d27b0cadff1c4f' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab4_obiektowosc\\app\\CalcView.html',
      1 => 1712085850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66145e79a02ed7_02244611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169981737366145e79898432_46332315', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89610968466145e7989a578_00880721', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_169981737366145e79898432_46332315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_169981737366145e79898432_46332315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
haha to sie nie wyswietli<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_89610968466145e7989a578_00880721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89610968466145e7989a578_00880721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
			<fieldset>
				<label for="id_kwota">Podaj kwotę:</label>
				<input id="id_kwota" type="text" placeholder="wartość kwoty" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
				<label for="id_years">Podaj ilość lat:</label>
				<input id="id_years" type="text" placeholder="liczba lat" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
				<label for="id_proc">Podaj oprocentowanie:</label>
				<input id="id_proc" type="text" placeholder="wartość oprocentowania" name="proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->proc;?>
">
				<br>
				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5" style="display:flex; justify-content:space-between">
		<div>
						<?php if ($_smarty_tpl->tpl_vars['messages']->value->isErrors()) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'msg');
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
		</div>


		<div>
						<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfos()) {?>
			<h4>Informacje: </h4>
			<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'msg');
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
		</div>

		<div>
			<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->res))) {?>
			<h4>Wynik</h4>
			<p class="res">
				<?php echo $_smarty_tpl->tpl_vars['result']->value->res;?>

			</p>
			<?php }?>
		</div>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
