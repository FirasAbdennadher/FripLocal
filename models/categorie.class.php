<?php
class categorie extends fonction{
	private $id_cat;
	private $nom_cat;


	public function __constructor($nom_cat){
		$this->nom_cat = $nom_cat;
	}

	public function add($cnx){
		$cnx->exec("insert into categorie (nom_categorie) values('".$this->nom_cat."')");
		$this->redirect("index.php?controleur=categorie&action=liste");
	}
	public function edit($cnx){
		$cnx->exec("update categorie set nom_categorie='".$this->nom_cat."' where id='".$this->id_cat."'");
		$this->redirect("index.php?controleur=categorie&action=liste");
	
	}
	public function supp($cnx){
		$cnx->exec("delete from categorie where id='".$this->id_cat."'");
		$this->redirect("index.php?controleur=categorie&action=liste");
	}
	public function liste($cnx){
		$categories=$cnx->query("select * from categorie")->fetchAll(PDO::FETCH_OBJ);
		return $categories;
	}
	
	public function detail($cnx){
		$categorie=$cnx->query("select * from categorie where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
		return $categorie;


}
}
?>