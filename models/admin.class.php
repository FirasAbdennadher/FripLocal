<?php
class admin extends fonction{
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

	public function add($cnx){
		$res=$cnx->prepare("insert into admin (nom_pers, prenom_pers,email_pers, mdp_pers, tel_pers) values(?,?,?,?,?)");
		$res->execute([$this->nom_pers, $this->prenom_pers,$this->email_pers,$this->mdp_pers,$this->tel_pers]);
		$this->redirect("index.php?controller=admin&action=liste");
	}
	
	public function edit($cnx){
		$res=$cnx->prepare("update admin set nom_pers=?,prenom_pers=?,email_pers=?,mdp_pers=?,tel_pers=? where id_pers=?");
		$res->bindParam(1,$this->nom_pers);
		$res->bindParam(2,$this->prenom_pers);
		$res->bindParam(3,$this->email_pers);
		$res->bindParam(4,$this->mdp_pers);
		$res->bindParam(4,$this->tel_pers);
		$res->bindParam(5,$this->id_pers);
		$res->execute();
		$this->redirect("index.php?controller=admin&action=liste");
	}
	
	public function supp($cnx){
		$cnx->exec("delete from admin where id_pers='".$this->id_pers."'");
		$this->redirect("index.php?controller=admin&action=liste");
	}
	
	public function liste($cnx){
		$admins=$cnx->query("select * from admin")->fetchAll(PDO::FETCH_OBJ);
		return $admins;
	}
	
	public function detail($cnx){
		$admin=$cnx->query("select * from admin where id_pers='".$this->id_pers."'")->fetch(PDO::FETCH_OBJ);
		return $admin;
	}
	
	public function login($cnx){
		$admin=$cnx->query("select * from admin where email_pers='".$this->email_pers."' and mdp_pers='".$this->mdp_pers."'")->fetch(PDO::FETCH_OBJ);
		if(is_object($admin)){
			$_SESSION['email_pers']=$this->email_pers;
			$_SESSION['mdp_pers']=$this->mdp_pers;
			$this->redirect("index.php");
		}else{
			$this->redirect("login.php?error=1");
		}
	}
	
	public function logout(){
	session_destroy();
	$this->redirect("login.php");
	}


}
?>