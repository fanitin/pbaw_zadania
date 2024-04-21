<?php
/* Smarty version 4.3.2, created on 2024-04-21 04:47:27
  from 'C:\Tools\XAMPP\htdocs\projects\pbaw_zadania\lab6_ochrona_zasobow\app\view\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66247e3f0b0ae3_44443322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e80eaefd1bace43f1803bf999c72949f9ddc9f8' => 
    array (
      0 => 'C:\\Tools\\XAMPP\\htdocs\\projects\\pbaw_zadania\\lab6_ochrona_zasobow\\app\\view\\templates\\messages.tpl',
      1 => 1713665160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66247e3f0b0ae3_44443322 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
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
		</div><?php }
}
