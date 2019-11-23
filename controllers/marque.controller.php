<?php //session_start();
include "includes/fonction.class.php";
include "models/marque.class.php";

//initialisation des parametres
$id="";
$nom_marq = "";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];


if (isset($_POST['nom_marq']))
	$nom_marq = $_POST['nom_marq'];

//creation de l'objet
$mar = new marque($id,$nom_marq);


switch ($action) {
	
	case "add1":
		case "add1":include "vue/marque/marque.php";
	break;
	
	case "add":$mar->add($cnx);
	break;
	
	case "supp":
		
		$mar->supp($cnx);
	break;
	
	case "liste":$marques=$mar->liste($cnx);
	include "vue/marque/liste_marque.php";
	break;
	
	case "edit1":$marque=$mar->detail($cnx);
	include "vue/marque/modifier_marque.php";
	break;
	
	case "edit":$mar->edit($cnx);
	break;
}