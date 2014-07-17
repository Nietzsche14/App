<?php /*%%SmartyHeaderCode:737253c692f686ec34-18296936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364ddc49f326a666784d8b030826c8c8d32cbb27' => 
    array (
      0 => 'vue\\page_principale.php',
      1 => 1405522806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '737253c692f686ec34-18296936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c692f68bce37_82601806',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c692f68bce37_82601806')) {function content_53c692f68bce37_82601806($_smarty_tpl) {?><<?php ?>?php
	session_start();
?<?php ?>>
<?php echo $_smarty_tpl->getSubTemplate ("vue/haut.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/body.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("vue/bas.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			<?php }} ?>
