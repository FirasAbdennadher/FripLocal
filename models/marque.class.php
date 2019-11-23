<?php
class marque extends fonction{
	private $id;
	private $nom_marq;

	public function __construct($id,$nom_marq){
		$this->id = $id;
		$this->nom_marq = $nom_marq;
	}

	public function add($cnx){
		$res=$cnx->prepare("insert into marque (nom_marq) values(?)");
		$res->execute([$this->nom_marq]);
		$this->redirect("index.php?controller=marque&action=liste");
	}
	public function edit($cnx){
		$res=$cnx->prepare("update marque set nom_marq=? where id=?");
		$res->bindParam(1,$this->nom_marq);
		$res->bindParam(2,$this->id);
		$res->execute();
		$this->redirect("index.php?controller=marque&action=liste");
	}
	public function supp($cnx){
		$cnx->exec("delete from marque where id='".$this->id."'");
		$this->redirect("index.php?controller=marque&action=liste");
	}
	
	public function liste($cnx){
		$marques=$cnx->query("select * from marque")->fetchAll(PDO::FETCH_OBJ);
		
		
		return $marques;
	}
	
	public function detail($cnx){
		$marque=$cnx->query("select * from marque where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
		return $marque;
	}


}
?>