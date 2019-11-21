<?php //session_start();

include "includes/fonction.class.php";
include "models/personne.class.php";

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
$personne=new personne($nom_pers,$prenom_pers,$email_pers,$mdp_pers,$tel_pers);
$l=$email_pers;
$m=$mdp_pers;

switch($action){
	case "login1":include "vue/admin/login.php";
	break;
	
	case "login":
		
		$personne->login($cnx,$l,$m);
	break;
	
	case "logout":$personne->logout();
	break;
	
	case "add1":include "vue/admin/ajout_admin.php";
	break;
	
	case "add":$personne->add($cnx);
	break;
	
	case "supp":$personne->supp($cnx);
	break;
	
	case "liste":$personnes=$personne->liste($cnx);
	include "vue/admin/liste_admin.php";
	break;
	
	case "edit1":$personne=$personne->detail($cnx);
	include "vue/admin/modifier_admin.php";
	break;
	
	case "edit":$personne->edit($cnx);
	break;
}
?>
