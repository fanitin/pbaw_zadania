<?php
/* Smarty version 4.3.2, created on 2024-04-24 20:54:28
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab6b_routing\app\view\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66295564ad5095_12415263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2311bce61cdafcb5eec16898ed914f3182c4526' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab6b_routing\\app\\view\\LoginView.tpl',
      1 => 1713726938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_66295564ad5095_12415263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14810389366295564acfef5_70421868', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14810389366295564acfef5_70421868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14810389366295564acfef5_70421868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Header -->
		<header id="header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->root_path;?>
/index.php" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
		</header>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
    <legend>Logowanie do systemu</legend>
    <fieldset>
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login"/>

        <label for="id_password">Password</label>
        <input id="id_password" type="password" name="password"/>

        <input type="submit" value="zaloguj" class="pure-button"/>
    </fieldset>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
