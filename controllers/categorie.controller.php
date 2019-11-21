<?php //session_start();
include "includes/fonction.class.php";
include "models/categorie.class.php";

//initialisation des parametres
$nom_cat = "";


//recupétation des variables externes



if (isset($_REQUEST['$nom_cat']))
	$nom_cat = $_REQUEST['nom_cat'];

//creation de l'objet
$cat = new categorie($nom_cat);


switch ($action) {
	
	case "add1":
		case "add1":include "vue/categorie/categorie.php";
	break;
	
	case "add":$cat->add($cnx);
	break;
	
	case "supp":$cat->supp($cnx);
	break;
	
	case "liste":$categories=$cat->liste($cnx);
	include "vue/categorie/liste_categorie.php";
	break;
	
	case "edit1":$categorie=$cat->detail($cnx);
	include "view/categorie/modifier_categorie.php";
	break;
	
	case "edit":$cat->edit($cnx);
	break;
}