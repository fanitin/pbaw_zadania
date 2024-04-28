<?php
/* Smarty version 4.3.2, created on 2024-04-28 04:29:19
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab7_baza_danych\app\view\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_662db47f91e0c7_46904518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '840268a9eb2c88dff2759b1ce144750f1f7e2b38' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab7_baza_danych\\app\\view\\CalcView.tpl',
      1 => 1714271259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662db47f91e0c7_46904518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_773167769662db47f9159b8_09997817', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_773167769662db47f9159b8_09997817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_773167769662db47f9159b8_09997817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Header -->
		<header id="header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
operationList" style="padding:0 1.5em">Poprzednie wyniki</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" style="padding:0 1.5em">wyloguj</a>
		</header>

		
<h2>Kalkulator kredytowy</h2>


<div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
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
			<label for="id_numer">Podaj numer telefonu:</label>
			<input id="id_numer" type="text" placeholder="+48XXXXXXXXX" name="numer" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer;?>
">
			<br>
			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>
	<div style="display:flex; justify-content:space-between">
	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div style="padding:0 1.5em">
			<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->res))) {?>
				<h4>Wynik</h4>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['result']->value->res;?>

				</p>
			<?php }?>
		</div>
	</div>


<?php
}
}
/* {/block 'top'} */
}
