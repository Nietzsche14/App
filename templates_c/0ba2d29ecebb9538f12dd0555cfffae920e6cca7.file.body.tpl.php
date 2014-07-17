<?php /*%%SmartyHeaderCode:1341153c69d63ef7df5-31445824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ba2d29ecebb9538f12dd0555cfffae920e6cca7' => 
    array (
      0 => 'vue\\body.tpl',
      1 => 1405525912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341153c69d63ef7df5-31445824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c69d63f1eef9_50241090',
  'variables' => 
  array (
    'listeVideos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c69d63f1eef9_50241090')) {function content_53c69d63f1eef9_50241090($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['listeVideos']->value[2][0];?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['listeVideos']->value[1];?>
</h2>
	
<script src="vue/jquery.js"></script>
<div id="nbQuestion"></div>
<div id="affichageVideo" style="display: none">
	<fieldset id="fs1">
		<legend>video Originale </legend>
			<video id="videoOrig" src="http://liris.cnrs.fr/guillaume.lavoue/rech/mask.ogv"/>
		<div id="attente0"><div>
	</fieldset>
	
	<fieldset id="fs2">
		<legend>Algorithme 1</legend>
		
			<video id="videoAlgo1" src="http://liris.cnrs.fr/guillaume.lavoue/rech/"+<?php echo $_smarty_tpl->tpl_vars['listeVideos']->value[2][0];?>
+".ogv" />
		<div id="attente1"><div>
	</fieldset>
	<fieldset id="fs3">
		<legend>Algorithme 2</legend>
			<video id="videoAlgo2" src="http://liris.cnrs.fr/guillaume.lavoue/rech/"<?php echo $_smarty_tpl->tpl_vars['listeVideos']->value[2][0];?>
".ogv" />
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
