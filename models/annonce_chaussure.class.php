<?php
class annonce_chaussure{
	private $id_an;
	private $nom_an;
	private $prix_an;
	private $description_an;
	private $date_pub_an;
	private $couleur_an;
	private $region_an;
	private $pointure_chauss_an;


	public function __constructor($nom_an,$prix_an,$description_an,$date_pub_an,$couleur_an,$region_an,$pointure_chauss_an){
		$this->nom_an = $nom_an;
		$this->prix_an = $prix_an;
		$this->description_an = $description_an;
		$this->date_pub_an = $date_pub_an;
		$this->couleur_an = $couleur_an;
		$this->region_an = $region_an;
		$this->pointure_chauss_an = $pointure_chauss_an;
	}

	public function add($cnx){
		
	}
	
	public function edit($cnx){
		
	}
	
	public function supp($cnx){
		
	}
	
	public function liste($cnx){
		
	}
	
	public function detail($cnx){
		
	}
}
?>