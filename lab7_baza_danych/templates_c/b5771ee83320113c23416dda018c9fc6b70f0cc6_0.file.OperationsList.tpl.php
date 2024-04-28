<?php
/* Smarty version 4.3.2, created on 2024-04-28 05:07:38
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab7_baza_danych\app\view\OperationsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_662dbd7a479f54_34641060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5771ee83320113c23416dda018c9fc6b70f0cc6' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab7_baza_danych\\app\\view\\OperationsList.tpl',
      1 => 1714273649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662dbd7a479f54_34641060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1470098321662dbd7a465465_65149809', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639527064662dbd7a470462_93659649', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1470098321662dbd7a465465_65149809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1470098321662dbd7a465465_65149809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<header id="header">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
operationList" style="padding:0 1.5em">Poprzednie wyniki</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" style="padding:0 1.5em">wyloguj</a>
</header>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
operationList" method="post">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
    <div style="display:flex; justify-content:space-between">
		<input type="text" placeholder="Numer telefonu" name="search_number" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->phoneNumber;?>
" /><br />
		<button type="submit" >Szukaj</button>
    </div>
	</fieldset>
</form>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
operationList" method="post">
	<legend>Opcje sortowania</legend>
	<fieldset>
    <div style="display:flex; justify-content:space-between">
		<select name="sort_type">
            <option value="id_wynik" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'id_wynik') {?>selected<?php }?>>Id_wynik</option>
            <option value="kwota" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'kwota') {?>selected<?php }?>>Kwota</option>
            <option value="years" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'years') {?>selected<?php }?>>Years</option>
            <option value="procent" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'procent') {?>selected<?php }?>>Procent</option>
            <option value="wynik" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'wynik') {?>selected<?php }?>>Wynik</option>
            <option value="data" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'data') {?>selected<?php }?>>Data</option>
            <option value="phone" <?php if ($_smarty_tpl->tpl_vars['sort_type']->value == 'phone') {?>selected<?php }?>>Phone</option>
        </select>
        <select name="sort_updown">
            <option value="ASC" <?php if ($_smarty_tpl->tpl_vars['sort_updown']->value == 'ASC') {?>selected<?php }?>>Rosnąco</option>
            <option value="DESC" <?php if ($_smarty_tpl->tpl_vars['sort_updown']->value == 'DESC') {?>selected<?php }?>>Malejąco</option>
        </select>
		<button type="submit" >Sortuj</button>
    </div>
	</fieldset>
</form>

</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1639527064662dbd7a470462_93659649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1639527064662dbd7a470462_93659649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<table>
    <tr>
        <th>Id_wynik</th>
        <th>Kwota</th>
        <th>Years</th>
        <th>Procent</th>
        <th>Wynik</th>
        <th>Data</th>
        <th>Phone</th>
    <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['operations']->value, 'op');
$_smarty_tpl->tpl_vars['op']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['op']->value["id_wynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["years"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["wynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["data"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['op']->value["phone"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
operationDelete&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id_wynik'];?>
">Usuń</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php
}
}
/* {/block 'bottom'} */
}
