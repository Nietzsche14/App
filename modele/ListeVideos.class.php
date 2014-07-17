<?php
class ListeVideos{
	protected $videos;
	protected $fichierCSVVideos;
	
	public function __construct($fichier){
		$this->fichierCSVVideos=__DIR__.'/donnees/'.$fichier;
		$this->videos=array();
	}
	public function getVideos(){
		return $this->videos;
	}
	
	public function chargerVideos(){
		$fichier=fopen($this->fichierCSVVideos,'r');
		$i=0;
		while(!feof($fichier)){
			if($i!=0){
				$ligne=fgets($fichier);
				$key=split(',',$ligne)[0];
				$value=split(',',$ligne);
				$this->videos[$key]=$value[1].','.$value[2].','.$value[3];  //chaine de caractère pour ajax
			}
			$i++;
		}
		fclose($fichier);
	}
	public function afficher(){
		
		foreach($this->videos as $key=>$value){
			echo $key.' : '.$value.'<br/>';
		}
		echo count($this->videos);
	}
}
?>
			