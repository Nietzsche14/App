<?php
session_start();
/* include('modele/EcrireFichier.class.php');
$fichier= new EcrireFichier('test.txt');
$donnees= array('chien'=>'bleu',
				'chat'=>'noir');
$fichier->ecrireResultat($donnees); */
include('modele/ListeVideos.class.php');
include('controleur/EnvoiVideos.class.php');

$fichier='videos.csv';
$videos = new ListeVideos($fichier);
$videos->chargerVideos();
$tabVideos= new EnvoiVideos($videos->getVideos());
$_SESSION['tableauVideos']=$tabVideos->start();


require('tpl/smarty.class.php');
$tpl=new Smarty();
$i=0;
$tpl->assign('i',$i);

$tpl->display('vue/page_principale.html');




?>