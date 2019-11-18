<?php //session_start();
include "../include/connexion.php";
include "../include/fonction.class.php";
include "../models/admin.class.php";

//initialisation des parametres
$fn=new fonction();
$id_admin="";
$nom_admin="";
$email_admin="";
$mdp_admin="";
$tel_admin="";
$action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];


if(isset($_REQUEST['id_admin']))
$id_admin=$_REQUEST['id_admin'];

if(isset($_POST['nom_admin']))
$nom_admin=$_POST['nom_admin'];


if(isset($_POST['email_admin']))
$email_admin=$_POST['email_admin'];

if(isset($_REQUEST['mdp_admin']))
$mdp_admin=$_REQUEST['mdp_admin'];

if(isset($_REQUEST['tel_admin']))
$tel_admin=$_REQUEST['tel_admin'];

//creation de l'objet
$abonnee=new cheval($id_admin, $nom_admin, $email_admin, $mdp_admin, $tel_admin);


switch($action){
	case "auth1":
		include "vue/admin/admin_auth.php";
		break;

	case "add1":
		include "vue/admin/admin_register.php";
		break;
}
?>
