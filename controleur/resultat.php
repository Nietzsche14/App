<?php 
session_start();
include('EnvoiVideos.class.php');
include('Code.class.php');
//header("Content-Type: text/plain");


//on charge les vidéos
$video=$_SESSION['tableauVideos'];

$resultat = (isset($_GET["resultat"])) ? $_GET["resultat"] : NULL;
$next = (isset($_GET["next"])) ? $_GET["next"] : NULL;
$compteur = (isset($_GET["compteur"])) ? $_GET["compteur"] : NULL;
// fonction qui va écrire dans le fichier


//fonction qui renvoit le nom de la vidéo
if ($resultat=='start') {
	echo $video[0];
}
if ($resultat=='next' && $compteur) {
	echo $video[$compteur];
}
elseif ($id && $caracteristiqueEcran){
	echo $tabVideos->start();
}
elseif ($resultat=='fin'){
	$code=new Code('liris','12235');
	echo $code->getCode();
}


?>