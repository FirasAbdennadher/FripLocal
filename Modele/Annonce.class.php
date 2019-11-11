<?php
class Annance(){
	private $id_an;
	private $nom_an;
	private $prix_an;
	private $pt_taille_an;
	private $description_an;
	private $date_pub_an;
	private $couleur_an;
	private $region_an;

	public function __constructor($nom_an,$prix_an,$pt_taille_an,$description_an,$date_pub_an,$couleur_an,$region_an){
		this->nom_an = $nom_an;
		this->prix_an = $prix_an;
		this->pt_taille_an = $pt_taille_an;
		this->description_an = $description_an;
		this->date_pub_an = $date_pub_an;
		this->couleur_an = $couleur_an;
		this->region_an = $region_an;
	}

	public function deposer(){

	}

	public function modifier(){

	}

	public function supprimer(){
		
	}




}
?>