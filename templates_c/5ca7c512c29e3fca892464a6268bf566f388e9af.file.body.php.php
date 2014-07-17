<?php /*%%SmartyHeaderCode:1817553c690a4907c37-51145755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca7c512c29e3fca892464a6268bf566f388e9af' => 
    array (
      0 => 'vue\\body.php',
      1 => 1405521996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817553c690a4907c37-51145755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c690a4907c36_74406329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c690a4907c36_74406329')) {function content_53c690a4907c36_74406329($_smarty_tpl) {?><h2><<?php ?>?php echo $_SESSION['listeVideos'];?<?php ?>></h2>
	
<script src="vue/jquery.js"></script>
<div id="nbQuestion"></div>
<div id="form" style="display: none">
	<fieldset id="fs1">
		<legend>video Originale </legend>
			<video id="videoOrig" />
		<div id="attente0"><div>
	</fieldset>
	<fieldset id="fs2">
		<legend>Algorithme 1</legend>
			<video id="videoAlgo1" />
		<div id="attente1"><div>
	</fieldset>
	<fieldset id="fs3">
		<legend>Algorithme 2</legend>
			<video id="videoAlgo2" />
		<div id="attente2"><div>
	</fieldset>
</div>
<input type="button" name="suivant" value="Suivant"/>
<input type="button" name="precedent" value="Precedent"/>
<form id="formulaireVideo" method="post" action="controleur/RecuperationResultat.php"/>
	<input type="hidden" name="checkbox1" value=""/>
	<input type="hidden" name="checkbox2" value=""/>
	<input type="submit"/>
</form>
<script src="vue/modernizr.video.js"></script>
<script>


</script><?php }} ?>
