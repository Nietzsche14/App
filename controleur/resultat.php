<?php 
/* Amelioration du fichier
	au niveau de l'écriture dans le fichier, je crée à chaque fois un nouvel objet. Une amélioration peut-être faite de ce côté-là
	au niveau de l'utilisation de session pour le tableau. Un autre solution serait préférable. 
	
	une option pour les vidéos du test
*/

session_start();
include('../modele/EcrireFichier.class.php');
include('EnvoiVideos.class.php');
include('Code.class.php');
//header("Content-Type: text/plain");


//on récupère le tableau de vidéo
$video=$_SESSION['tableauVideos'];


//on recupère les éléments envoyés
$resultat = (isset($_GET["resultat"])) ? $_GET["resultat"] : NULL;
$test = (isset($_GET["test"])) ? $_GET["test"] : NULL;
$id = (isset($_GET["id"])) ? $_GET["id"] : NULL;
$ecran = (isset($_GET["ecran"])) ? $_GET["ecran"] : NULL;
$next = (isset($_GET["next"])) ? $_GET["next"] : NULL;
$compteur = (isset($_GET["compteur"])) ? $_GET["compteur"] : NULL;

$_SESSION['clientId']=$id; //je stocke son id


//fonction qui renvoit le nom de la vidéo
if ($test && $compteur)
	echo $video[$compteur];
	$fichier=new EcrireFichier('clientId'.$_SESSION['clientId'].'.txt');
	$fichier->ecrireNomColonnes();
	

if ($resultat && $compteur && $id && $ecran) {
	echo $video[$compteur];
	$fichier=new EcrireFichier('clientId'.$_SESSION['clientId'].'.txt');
	$fichier->ecrire('question '.$compteur.','.$resultat);
	
}
if ($next && $resultat && $compteur) {
	echo $video[$compteur];
	$fichier=new EcrireFichier('clientId'.$_SESSION['clientId'].'.txt');
	
	//différence entre le test et le début du travail
	if($test) $fichier->ecrire('questionTest '.$compteur.','.$resultat);
	else $fichier->ecrire('question '.$compteur.','.$resultat);
}
if ($id && $ecran){
	$fichier=new EcrireFichier('clientId'.$_SESSION['clientId'].'.txt');
	$fichier->ecrireCaracteristiqueWorker($id,$ecran);
}
elseif ($resultat && $compteur && $fin){
	$fichier=new EcrireFichier('clientId'.$_SESSION['clientId'].'.txt');
	$fichier->ecrire('question '.$compteur.','.$resultat);
	$code=new Code('liris','12235');
	echo $code->getCode();
}


?>