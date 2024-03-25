<?php
/* Smarty version 4.3.2, created on 2024-03-25 16:18:49
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab3_szablonowanie\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660195d93d15a8_38239758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6e3c357c6186045bdab4257fb73cc0651dea010' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab3_szablonowanie\\app\\calc.html',
      1 => 1711379796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660195d93d15a8_38239758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026310652660195d93c6366_45227950', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445491310660195d93c6b68_43063973', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1026310652660195d93c6366_45227950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1026310652660195d93c6366_45227950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1445491310660195d93c6b68_43063973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1445491310660195d93c6b68_43063973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
            <fieldset>
    
                <label for="id_kwota">Podaj kwotę:</label>
                <input id="id_kwota" type="text" placeholder="wartość kwoty" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
">
                <label for="id_years">Podaj ilość lat:</label>
                <input id="id_years" type="text" placeholder="liczba lat" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
">
                <label for="id_proc">Podaj oprocentowanie:</label>
                <input id="id_proc" type="text" placeholder="wartość oprocentowania" name="proc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['proc'];?>
">
    
                <button type="submit" class="pure-button">Oblicz</button>
            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
