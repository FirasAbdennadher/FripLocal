<?php //session_start();
include "includes/fonction.class.php";
include "models/categorie.class.php";

//initialisation des parametres
$id="";
$nom_cat = "";


//recupétation des variables externes

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];


if (isset($_POST['nom_cat']))
	$nom_cat = $_POST['nom_cat'];

//creation de l'objet
$cat = new categorie($id,$nom_cat);


switch ($action) {
	
	case "add1":
		case "add1":include "vue/categorie/categorie.php";
	break;
	
	case "add":$cat->add($cnx);
	break;
	
	case "supp":
		
		$cat->supp($cnx);
	break;
	
	case "liste":$categories=$cat->liste($cnx);
	include "vue/categorie/liste_categorie.php";
	break;
	
	case "edit1":$categorie=$cat->detail($cnx);
	include "vue/categorie/modifier_categorie.php";
	break;
	
	case "edit":$cat->edit($cnx);
	break;
}