<?php
/* Smarty version 4.1.0, created on 2023-07-20 07:50:42
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64b8e752797f17_86907769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9be0ecfd9cc66bba6b2c896d74703d29644ffc5' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1675465070,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b8e752797f17_86907769 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationMenuItem']->value->getLocalizedTitle() ));?>

<span class="task_count">
	<?php echo $_smarty_tpl->tpl_vars['unreadNotificationCount']->value;?>

</span>
<?php }
}
