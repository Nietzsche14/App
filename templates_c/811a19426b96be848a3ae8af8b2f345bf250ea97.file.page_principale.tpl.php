<?php /*%%SmartyHeaderCode:1033653c69d92dea993-84129111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811a19426b96be848a3ae8af8b2f345bf250ea97' => 
    array (
      0 => 'vue\\page_principale.tpl',
      1 => 1405525473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1033653c69d92dea993-84129111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c69d92e38b97_43665330',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c69d92e38b97_43665330')) {function content_53c69d92e38b97_43665330($_smarty_tpl) {?><<?php ?>?php
	session_start();
?<?php ?>>
<?php echo $_smarty_tpl->getSubTemplate ("vue/haut.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/bas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			<?php }} ?>
