<?php //session_start();

include "includes/fonction.class.php";
include "models/personne.class.php";

//initialisation des parametres
$fn = new fonction();
$id = "";
$nom_pers = "";
$prenom_pers = "";
$email_pers = "";
$mdp_pers = "";
$tel_pers = "";
$status = "";
$id_role = "2";

//recupétation des variables externes
if (isset($_REQUEST['id']))
	$id = $_REQUEST['id'];

if (isset($_POST['nom_pers']))
	$nom_pers = $_POST['nom_pers'];


if (isset($_POST['prenom_pers']))
	$prenom_pers = $_POST['prenom_pers'];

if (isset($_POST['email_pers']))
	$email_pers = $_POST['email_pers'];

if (isset($_POST['mdp_pers']))
	$mdp_pers = $_POST['mdp_pers'];

if (isset($_POST['tel_pers']))
	$tel_pers = $_POST['tel_pers'];

if (isset($_POST['status']))
	$status = $_POST['status'];
else $status = 'non accepte';


//creation de l'objet
$pers = new personne($id, $nom_pers, $prenom_pers, $email_pers, $mdp_pers, $tel_pers, $id_role, $status);

switch ($action) {
	case "login1":
		include "vue/abonnee/abn_auth.php";
		break;

	case "login":
		$pers->login($cnx);
		break;

	case "logout":
		$pers->logout();
		break;

	case "add1":
		include "vue/abonnee/abn_register.php";
		break;

	case "contact":
		include "vue/abonnee/contact.php";
		break;


	case "add":
		$pers->add($cnx);
		break;

	case "supp":

		$pers->supp($cnx);
		break;

	case "edit":
		$pers->edit($cnx);
		break;
}
