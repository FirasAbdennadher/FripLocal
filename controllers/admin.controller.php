<?php //session_start();

include "includes/fonction.class.php";
include "models/admin.class.php";

//initialisation des parametres
$fn=new fonction();
$id_pers="";
$nom_pers="";
$prenom_pers="";
$email_pers="";
$mdp_pers="";
$tel_pers="";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];


if(isset($_REQUEST['id_pers']))
$id_pers=$_REQUEST['id_pers'];

if(isset($_POST['nom_pers']))
$nom_pers=$_POST['nom_pers'];


if(isset($_POST['prenom_pers']))
$prenom_pers=$_POST['prenom_pers'];

if(isset($_REQUEST['email_pers']))
$email_pers=$_REQUEST['email_pers'];

if(isset($_REQUEST['mdp_pers']))
$mdp_pers=$_REQUEST['mdp_pers'];

if(isset($_REQUEST['tel_pers']))
$tel_pers=$_REQUEST['tel_pers'];

//creation de l'objet
$admin=new admin($nom_pers,$prenom_pers,$email_pers,$mdp_pers,$tel_pers);


switch($action){
	case "login1":include "vue/admin/login.php";
	break;
	
	case "login":
		$admin->login($cnx);
	break;
	
	case "logout":$admin->logout();
	break;
	
	case "add1":include "vue/admin/ajout_admin.php";
	break;
	
	case "add":$admin->add($cnx);
	break;
	
	case "supp":$admin->supp($cnx);
	break;
	
	case "liste":$admins=$admin->liste($cnx);
	include "vue/admin/liste_admin.php";
	break;
	
	case "edit1":$admin=$admin->detail($cnx);
	include "vue/admin/modifier_admin.php";
	break;
	
	case "edit":$admin->edit($cnx);
	break;
}
?>
