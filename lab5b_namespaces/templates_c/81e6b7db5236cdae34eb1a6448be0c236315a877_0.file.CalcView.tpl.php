<?php
/* Smarty version 4.3.2, created on 2024-04-09 20:10:27
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab5b_namespaces\app\view\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66158493845e81_49040204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e6b7db5236cdae34eb1a6448be0c236315a877' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab5b_namespaces\\app\\view\\CalcView.tpl',
      1 => 1712611310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66158493845e81_49040204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1066155395661584938387b2_81540872', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130072052866158493839e16_50949875', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1066155395661584938387b2_81540872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1066155395661584938387b2_81540872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
haha to sie nie wyswietli<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_130072052866158493839e16_50949875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130072052866158493839e16_50949875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Kalkulator kredytowy</h2>

<div>
	<div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
CalcKred" method="post">
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

	<div style="display:flex; justify-content:space-between">
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
			<ol>
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
			<p>
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
