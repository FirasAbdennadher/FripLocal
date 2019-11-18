<?php //session_start();
include "models/abonnee.class.php";

//initialisation des parametres
$id_pers = "";
$nom_pers = "";
$email_pers = "";
$mdp_pers = "";
$tel_pers = "";
$action = "auth1";

//recupétation des variables externes
if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];


if (isset($_REQUEST['id_pers']))
	$id_pers = $_REQUEST['id_pers'];

if (isset($_POST['nom_pers']))
	$nom_pers = $_POST['nom_pers'];

if (isset($_POST['email_pers']))
	$email_pers = $_POST['email_pers'];

if (isset($_REQUEST['mdp_pers']))
	$mdp_pers = $_REQUEST['mdp_pers'];

if (isset($_REQUEST['tel_pers']))
	$tel_pers = $_REQUEST['tel_pers'];

//creation de l'objet
$abn = new abonnee($id_pers, $nom_pers, $email_pers, $mdp_pers, $tel_pers);


switch ($action) {
	case "auth1":
		include "vue/abonnee/abn_auth.php";
		break;

	case "add1":
		include "vue/abonnee/abn_register.php";
		break;

	case "auth":
		$abonnee = $chev->detail($cnx);
		include "modifier_cheval.php";
		break;

	case "edit":
		$chev->edit($cnx);
		break;
}
