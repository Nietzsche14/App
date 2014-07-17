<?php /*%%SmartyHeaderCode:1423253c6788a4d7c88-51161636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '798fe52cfbc7a7ddd8dff99236fc4db8db80b230' => 
    array (
      0 => 'vue\\page_principale.html',
      1 => 1405526011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423253c6788a4d7c88-51161636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c6788a568522_09833550',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c6788a568522_09833550')) {function content_53c6788a568522_09833550($_smarty_tpl) {?><<?php ?>?php
	session_start();
?<?php ?>>
<?php echo $_smarty_tpl->getSubTemplate ("vue/haut.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/body.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/bas.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			<?php }} ?>
