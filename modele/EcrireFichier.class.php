<?php
Class EcrireFichier{
		protected $fichier;
	public function __construct($nomFichier){
	//faire des test sur l'existence du fichier
		$this->fichier=__DIR__.'/donnees/'.$nomFichier;
	}
	public function ecrireNomColonnes(){
		$fichierEcriture=fopen($this->fichier,'a+');
		$ligne='cle,valeur'."\n";
		fputs($fichierEcriture,$ligne);
		fclose($fichierEcriture);
	}
	public function ecrireCaracteristiqueWorker($id,$ecran){
		$fichierEcriture=fopen($this->fichier,'a+');
		$fichierEcriture->fgets();
		fputs($fichierEcriture,'clientId,'$id);
		fputs($fichierEcriture,'ecran,'$ecran);
		fclose($fichierEcriture);
	}
	public function ecrireCaracteristiqueWorker($arrayCaracteristiqueWorker){
		$fichierEcriture=fopen($this->fichier,'a+');
		foreach($arrayCaracteristiqueWorker as $key=>$value){
			$ligne=$key.','.$value."\n";
			fputs($fichierEcriture,$ligne);
		}
		fclose($fichierEcriture);
	}
	
	public function ecrireResultat($arrayDonnees){
		$fichierEcriture=fopen($this->fichier,'a+');
		foreach($arrayDonnees as $key=>$value){
			$ligne=$key.','.$value."\n";
			fputs($fichierEcriture,$ligne);
		}
		fclose($fichierEcriture);
	}
	public function ecrire($ligne){
		$fichierEcriture=fopen($this->fichier,'a+');
		fputs($fichierEcriture,$ligne."\n");
	}
}
?>