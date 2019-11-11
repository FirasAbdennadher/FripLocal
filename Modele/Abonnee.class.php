<?php
class abonnee extends Abonne(){
	private $id_an;
	private $nom_pers;
	private $prenom_pers;
	private $email_pers;
	private $mdp_pers;
	private $tel_pers;

	public function __constructor($nom_pers,$prenom_pers,$email_pers,$mdp_pers,$tel_pers){
		this->nom_pers = $nom_pers;
		this->prenom_pers = $prenom_pers;
		this->email_pers = $email_pers;
		this->mdp_pers = $mdp_pers;
		this->tel_pers = $tel_pers;
	}

	public function Authentifier(){

	}

	public function Valid_Annance(){

	}

	public function Valid_Compte(){
		
	}



}
?>