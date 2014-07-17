<?php
class EnvoiVideos{
	protected $listeVideos;
	protected $nbAleatoire;
	protected $compteur;
	protected $testStart;
	
	public function __construct($arrayVideos){
		$this->listeVideos=$arrayVideos;
		$this->listeAleatoireNombre=0;
		$this->compteur=0;
		$this->testStart=false;
	}
	public function getListeVideos(){
		if(isset($this->listeVideos)){
			return $this->listeVideos;
		}
		else{
			return 'pas de videos';
		}
	}
	
	protected function triAleatoire(){
		//$this->afficher();
		shuffle($this->listeVideos);
		//$this->afficher();
	}
	public function start(){
		$this->triAleatoire();
		$this->testStart=true;
		//$this->compteur=0;
		//$video= $this->listeVideos[$this->nbAleatoire[$this->compteur]];
		$video=$this->listeVideos[0];
		$this->compteur=0;
	//	return $video;
		return $this->listeVideos;
		
	}
		
	public function next(){
		if (1>0){
			$this->compteur++;
			$video= $this->listeVideos[$this->compteur];
			return $this->compteur; 
		}
		else{
			echo 'vous n\'avez pas encore appelé la méthode start :'.$this->testStart;;
		}
	}
	public function afficher(){
		
		foreach($this->listeVideos as $key=>$value){
			echo $key.' : '.$value.'<br/>';
		}
	}
}
?>
		