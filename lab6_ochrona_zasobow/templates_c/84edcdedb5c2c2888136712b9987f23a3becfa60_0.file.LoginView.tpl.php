<?php
/* Smarty version 4.3.2, created on 2024-04-21 05:27:36
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab6_ochrona_zasobow\app\view\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_662487a8ae0f49_66453042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84edcdedb5c2c2888136712b9987f23a3becfa60' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab6_ochrona_zasobow\\app\\view\\LoginView.tpl',
      1 => 1713670054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662487a8ae0f49_66453042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1614291993662487a8adb196_26561382', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1614291993662487a8adb196_26561382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1614291993662487a8adb196_26561382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
