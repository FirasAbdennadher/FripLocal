<?php
class annonce extends fonction{


	private $id_an;
	private $titre_an;
	private $prix_an;
	private $description_an;
	private $date_pub_an;
	private $couleur_an;
	private $region_an;
	private $taille;
	private $id_marque;
	private $id_categorie;
	private $id_pers;
	private $photos=array();


	public function __construct($id_an,$titre_an,$prix_an,$description_an,$date_pub_an,$couleur_an,$region_an,$taille,$id_marque,$id_categorie,$id_pers,$photos){
		$this->id_an = $id_an;
		$this->titre_an = $titre_an;
		$this->prix_an = $prix_an;
		$this->description_an = $description_an;
		$this->date_pub_an = $date_pub_an;
		$this->couleur_an = $couleur_an;
		$this->region_an = $region_an;
		$this->taille = $taille;
		$this->id_marque=$id_marque;
		$this->id_categorie=$id_categorie;
		$this->id_pers=$id_pers;
		$this->photos=$photos;
	}

	public function add($cnx){

		$res=$cnx->prepare("insert into annonce(titre_an,prix_an,description_an,date_pub_an,couleur_an,region_an,id_marque, id_categorie,taille,id_pers) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$res->execute([$this->titre_an, $this->prix_an, $this->description_an,$this->date_pub_an,$this->couleur_an,$this->region_an,$this->id_marque,$this->id_categorie, $this->taille,$this->id_pers]);
		$id=$cnx->lastInsertId();
		foreach ($this->photos as $photo){
			$ph= new photo("",$photo,$id);
			$ph-> add($cnx);
        }
		
		$this->redirect("index.php?controller=annonce&action=liste");
	}
	
	public function edit($cnx){
		$res=$cnx->prepare("update annonce set titre_an=?,prix_an=?,description_an=?,date_pub_an=?,couleur_an=?,region_an=?,id_marque=?, id_categorie=?,taille=?,id_pers=? where id_an=?");
		$res->bindParam(1,$this->titre_an);
		$res->bindParam(2,$this->prix_an);
		$res->bindParam(3,$this->description_an);
		$res->bindParam(4,$this->date_pub_an);
		$res->bindParam(5,$this->couleur_an);
		$res->bindParam(6,$this->region_an);
		$res->bindParam(7,$this->id_marque);
		$res->bindParam(8,$this->id_categorie);
		$res->bindParam(9,$this->taille);
		$res->bindParam(10,$this->id_pers);
		$res->bindParam(11,$this->id_an);
		$res->execute();
		$this->redirect("index.php?controller=annonce&action=liste");
	}
	
	public function supp($cnx){
		$ph= new photo("","",$this->id_an);
		$photo=$ph-> detail_photos($cnx);
		$cnx->exec("delete from annonce where id_an='".$this->id_an."'");
	
		foreach($photo as $p){
			
		unlink("photos/".$p->nom_photo);
	}
		$this->redirect("index.php?controller=annonce&action=liste");
	}
	
	public function liste($cnx){
		$annonces=$cnx->query("select * from annonce")->fetchAll(PDO::FETCH_OBJ);
		return $annonces;
	}
	public function recherche_avance($cnx, $ch){
		$annonces=$cnx->query("select * from annonce where ".$ch)->fetchAll(PDO::FETCH_OBJ);
		return $annonces;
	}
	
	public function detail($cnx){
		$annonce=$cnx->query("select * from annonce where id_an='".$this->id_an."'")->fetch(PDO::FETCH_OBJ);
		return $annonce;
	}
	
}
?>