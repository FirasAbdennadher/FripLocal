<?php
class abonnee {
	private $id_pers;
	private $nom_pers;
	private $prenom_pers;
	private $email_pers;
	private $mdp_pers;
	private $tel_pers;

	public function __constructor($nom_pers,$prenom_pers,$email_pers,$mdp_pers,$tel_pers){
		$this->nom_pers = $nom_pers;
		$this->prenom_pers = $prenom_pers;
		$this->email_pers = $email_pers;
		$this->mdp_pers = $mdp_pers;
		$this->tel_pers = $tel_pers;
	}

	public function Authentifier($cnx){
		$abonnee=$cnx->query("select * from abonnee where email_pers='".$this->email_pers."' and mdp_pers='".$this->mdp_pers."'")->fetch(PDO::FETCH_OBJ);
		return $abonnee;
	}
	public function add($cnx){
		
		$res=$cnx->prepare("insert into abonnee (nom_pers,prenom_pers,email_pers,mdp_pers,tel_pers) values(?,?,?,?,?)");
	$res->execute([$this->nom_pers,$this->prenom_pers,$this->email_pers,$this->mdp_pers,$this->tel_pers]);

	echo "<script>window.location.href=index.php</script>";
	}

	



}
?>