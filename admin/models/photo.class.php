<?php
class photo extends fonction{
	
	private $id;
	private $nom_photo;
	private $id_an;

	public function __construct($id,$nom_photo,$id_an){
		$this->id = $id;
		$this->nom_photo = $nom_photo;
		$this->id_an = $id_an;
	}

	public function add($cnx){
		$res=$cnx->prepare("insert into photo (nom_photo,id_an) values(?,?)");
		$res->execute([$this->nom_photo,$this->id_an]);
		//$this->redirect("dashboard.php?controller=photo&action=liste");
	}
	public function edit($cnx){
		$res=$cnx->prepare("update photo set nom_photo=? where id=?");
		$res->bindParam(1,$this->nom_photo);
		$res->bindParam(2,$this->id);
		$res->execute();
		$this->redirect("dashboard.php?controller=photo&action=liste");
	}
	public function supp($cnx){
		$cnx->exec("delete from photo where id='".$this->id."'");
		unlink("photos/".$this->photo);
		$this->redirect("dashboard.php?controller=photo&action=liste");
	}
	
	public function liste($cnx){
		$photos=$cnx->query("select * from photo")->fetchAll(PDO::FETCH_OBJ);
		return $photos;
	}
	
	public function detail($cnx){
		$photo=$cnx->query("select * from photo where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
		return $photo;
	}
	
	public function detail_photos($cnx){
		
		$photo=$cnx->query("select * from photo where id_an='".$this->id_an."'")->fetchAll(PDO::FETCH_OBJ);
		
		return $photo;
	}




}
?>