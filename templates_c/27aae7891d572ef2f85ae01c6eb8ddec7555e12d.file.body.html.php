<?php /*%%SmartyHeaderCode:2237053c679ab726e08-92601695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27aae7891d572ef2f85ae01c6eb8ddec7555e12d' => 
    array (
      0 => 'vue\\body.html',
      1 => 1405607288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2237053c679ab726e08-92601695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53c679ab726e07_14738024',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c679ab726e07_14738024')) {function content_53c679ab726e07_14738024($_smarty_tpl) {?>	
<script src="vue/jquery.js"></script>

<div id="nbQuestion"></div>
<div id="affichageVideo" style="display: true">
	<fieldset id="fs1">
		<legend>video Originale </legend>
			<video id="videoOrig" width="300" height="300" type="video/ogv" />
		<div id="attente0"><div>
	</fieldset>
	
	<fieldset id="fs2">
		<legend>Algorithme 1</legend>
			<video id="videoAlgo1" width="300" height="300" type="video/ogv"  />
		<div id="attente1"><div>
	</fieldset>
	<fieldset id="fs3">
		<legend>Algorithme 2</legend>
			<video id="videoAlgo2" width="300" height="300" type="video/ogv"  />
		<div id="attente2"><div>
	</fieldset>
</div>
<input type="button" name="suivant" value="Suivant"/>
<input type="button" name="precedent" value="Precedent"/>
<form id="formulaireVideo" method="post" action="controleur/RecuperationResultat.php"/>
	<input type="hidden" name="checkbox1" value=""/>
	<input type="hidden" name="checkbox2" value=""/>
	<input type="button" value="start" onclick="request('start',readData);"/>
	<input type="button" value="suivant" onclick="request('next',readData);"/>
	<input type="button" value="fin" onclick="request('fin',readData);"/>
</form>

<script src="vue/modernizr.video.js"></script>
<script>
var compteur=0;
var urlVideo="http://liris.cnrs.fr/guillaume.lavoue/rech/";
var id='1411';
var ecran=screen.width+'x'+screen.height;

function request(param,callback) {
	var xhr = new XMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			callback(xhr.responseText);
		}
	};
	var requete=''
	if (param==='start') requete+='start=1&id='+window.id+'&ecran='+window.ecran;
	if (param==='next') {
		window.compteur++;
		var compt=window.compteur;
		console.log(window.compteur);
		requete +='next=1&compteur='+compt+'&';
	}
	if (param==='fin')	requete+='fin=1&';
	if (param==='test')	requete+='test=1&';
	
	xhr.open("GET", "controleur/resultat.php?"+requete, true);
	xhr.send(null);
}

function readData(sData) {
	console.log(sData);
	
	var videoSource= sData.split(',');
	$('video').each(function(i,el){
		el.src=window.urlVideo+videoSource[i]+".ogv";
		console.log(el.src);
		el.load();
		});
}

</script>
<?php }} ?>
