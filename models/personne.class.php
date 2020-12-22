<?php
class personne extends fonction
{
	private $id;
	private $nom_pers;
	private $prenom_pers;
	private $email_pers;
	private $mdp_pers;
	private $tel_pers;
	private $id_role;
	private $status;



	public function __construct($id, $nom_pers, $prenom_pers, $email_pers, $mdp_pers, $tel_pers, $id_role, $status)
	{
		$this->id = $id;
		$this->nom_pers = $nom_pers;
		$this->prenom_pers = $prenom_pers;
		$this->email_pers = $email_pers;
		$this->mdp_pers = $mdp_pers;
		$this->tel_pers = $tel_pers;
		$this->id_role = $id_role;
		$this->status = $status;
	}



	public function add($cnx)
	{
		$res = $cnx->prepare("insert into personne (id_role,nom_pers, prenom_pers,email_pers, mdp_pers, tel_pers,status) values(?,?,?,?,?,?,?)");
		$res->execute([$this->id_role, $this->nom_pers, $this->prenom_pers, $this->email_pers, $this->mdp_pers, $this->tel_pers, $this->status]);
		require 'admin/PHPMailer/PHPMailerAutoload.php';
		require 'admin/PHPMailer/credential.php';

		$mail = new PHPMailer;

		// $mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = EMAIL;                 // SMTP username
		$mail->Password = PASS;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom(EMAIL, 'FRIP LOCAL');
		$mail->addAddress($_POST['email_pers']);     // Add a recipient

		$mail->addReplyTo(EMAIL);
		// print_r($_FILES['file']); exit;
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Body    = '<div>Bonjour <h1>'.$_POST["nom_pers"]." ".$_POST["prenom_pers"].' </h1> ,vous étes le bienvenue   <br>
		votre login : '.$_POST["email_pers"].' <br>
		mot de passe : '.$_POST["mdp_pers"].'</div>';

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;exit();
		} else {
			//echo 'Message has been sent';
			echo '<script>alert("Email a été envoyé");</script>';
		}
		$this->redirect("index.php?controller=annonce&action=liste");
	}

	public function edit($cnx)
	{
		$res = $cnx->prepare("update personne set nom_pers=?,prenom_pers=?,email_pers=?,mdp_pers=?,tel_pers=?,status=? where id=?");
		$res->bindParam(1, $this->nom_pers);
		$res->bindParam(2, $this->prenom_pers);
		$res->bindParam(3, $this->email_pers);
		$res->bindParam(4, $this->mdp_pers);
		$res->bindParam(5, $this->tel_pers);
		$res->bindParam(6, $this->status);
		$res->bindParam(7, $this->id);
		$res->execute();
		$this->redirect("index.php?controller=personne&action=liste");
	}

	public function supp($cnx)
	{

		$cnx->exec("delete from personne where id='" . $this->id . "'");
		$this->redirect("index.php?controller=personne&action=liste");
	}

	public function liste($cnx)
	{

		$personnes = $cnx->query("select * from personne")->fetchAll(PDO::FETCH_OBJ);
		return $personnes;
	}

	public function detail($cnx)
	{
		//echo $this->id;
		$personne = $cnx->query("select * from personne where id='" . $this->id . "'")->fetch(PDO::FETCH_OBJ);
		//print_r($personne);
		//exit();

		return $personne;
	}

	public function login($cnx)
	{
		$personne = $cnx->query("select * from personne where email_pers='" . $this->email_pers . "' and mdp_pers='" . $this->mdp_pers . "'")->fetch(PDO::FETCH_OBJ);
		if (is_object($personne)) {
			$_SESSION['email_pers'] = $this->email_pers;
			$_SESSION['mdp_pers'] = $this->mdp_pers;
			$_SESSION['id'] = $personne->id;
			$_SESSION['id_role'] = $personne->id_role;
			$this->redirect("index.php");
		} else {
			$this->redirect("index.php?error=1&controller=personne&action=login1");
		}
	}

	public function logout()
	{
		session_destroy();
		$this->redirect("index.php");
	}
}
