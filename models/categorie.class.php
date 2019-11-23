<?php
class categorie extends fonction{
	private $id;
	private $nom_cat;

	public function __construct($id,$nom_cat){
		$this->id = $id;
		$this->nom_cat = $nom_cat;
	}
	

	public function add($cnx){
		$res=$cnx->prepare("insert into categorie (nom_cat) values(?)");
		$res->execute([$this->nom_cat]);
		$this->redirect("index.php?controller=categorie&action=liste");
		//header("location:index.php?controller=categorie&action=liste");
	}
	public function edit($cnx){
		$cnx->exec("update categorie set nom_cat='".$this->nom_cat."' where id='".$this->id."'");
		$this->redirect("index.php?controller=categorie&action=liste");
	
	}
	public function supp($cnx){
		$cnx->exec("delete from categorie where id='".$this->id."'");
		$this->redirect("index.php?controller=categorie&action=liste");
	}
	public function liste($cnx){
		$categories=$cnx->query("select * from categorie")->fetchAll(PDO::FETCH_OBJ);
		return $categories;
	}
	
	public function detail($cnx){
		$categorie=$cnx->query("select * from categorie where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
		return $categorie;}


}
?>