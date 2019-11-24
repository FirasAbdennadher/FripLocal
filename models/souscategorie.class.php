<?php
class souscategorie extends fonction{
	private $id_sous;
	private $nom_sous_cat;
	private $idcategorie=array();
	private $tab=array();
    
	public function __construct($id_sous,$nom_sous_cat,$idcategorie){
		$this->id_sous = $id_sous;
		$this->nom_sous_cat = $nom_sous_cat;
		$this->idcategorie= $idcategorie;
	}

	public function add($cnx){
		$res=$cnx->prepare("insert into sous_categorie (nom_sous_cat) values(?)");
		$res->execute([$this->nom_sous_cat]);
		
		//$this->redirect("index.php?controller=souscategorie&action=liste");
		//header("location:index.php?controller=categorie&action=liste");
	}
	public function addcontient($cnx)
	{   $idsous=$cnx->query("select id_sous from sous_categorie where nom_sous_cat = '".$this->nom_sous_cat."'")->fetchAll(PDO::FETCH_OBJ);
		$this->id_sous=$idsous[0]->id_sous;
		
		foreach ($this->idcategorie as $idcat)
		{
		$res=$cnx->prepare("insert into contient (id_cat,id_sous) values(?,?)");
		$res->execute([$idcat,$this->id_sous]);
		}
		$this->redirect("index.php?controller=souscategorie&action=liste");
	}
	public function suppcontient($cnx){
		$cnx->exec("delete from contient where id_sous='".$this->id_sous."'");
		
	}

	public function edit($cnx){
		$cnx->exec("update sous_categorie set nom_sous_cat='".$this->nom_sous_cat."' where id_sous='".$this->id_sous."'");
		$this->redirect("index.php?controller=souscategorie&action=liste");
	
	}
	public function supp($cnx){
		$cnx->exec("delete from sous_categorie where id_sous='".$this->id_sous."'");
		$this->redirect("index.php?controller=souscategorie&action=liste");
	}
	public function liste($cnx){
		$souscategories=$cnx->query("select * from sous_categorie")->fetchAll(PDO::FETCH_OBJ);
		return $souscategories;
	}
	public function listecat($cnx){
		$scats=$cnx->query("select id_sous from sous_categorie")->fetchAll(PDO::FETCH_OBJ);
		foreach ($scats as $suitenb => $n){
			foreach($n as $ni => $nn){
				
				$this->tab=array_merge($this->tab,$cnx->query("select nom_cat,ca.id,c.id_sous from categorie ca,contient c where ca.id=c.id_cat and c.id_sous='".$nn."'")->fetchAll(PDO::FETCH_OBJ));
				
			}
		}
		
		
		return $this->tab;
		
	
		
		
	}
	
	public function detail($cnx){
		$souscategorie=$cnx->query("select * from sous_categorie where id_sous='".$this->id_sous."'")->fetch(PDO::FETCH_OBJ);
		return $souscategorie;}
	
}
?>