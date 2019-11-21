<?php //session_start();
include "includes/fonction.class.php";
include "models/annonce.class.php";

//initialisation des parametres 
$id_an="";
$titre_an="";
$prix_an="";
$description_an="";
$date_pub_an="";
$couleur_an="";
$region_an="";
$taille="";
$id_marque="";
$id_categorie="";
$id_pers="";
$action="add1";
//recupétation des variables externes
if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];

if (isset($_REQUEST['id_an']))
	$id_an = $_REQUEST['id_an'];

if (isset($_REQUEST['titre_an']))
	$titre_an = $_REQUEST['titre_an'];

if (isset($_POST['prix_an']))
	$prix_an = $_POST['prix_an'];

if (isset($_POST['description_an']))
	$description_an = $_POST['description_an'];

if (isset($_REQUEST['date_pub_an']))
	$date_pub_an = $_REQUEST['date_pub_an'];

if (isset($_REQUEST['couleur_an']))
	$couleur_an = $_REQUEST['couleur_an'];

if (isset($_REQUEST['region_an']))
$region_an = $_REQUEST['region_an'];
    
if (isset($_REQUEST['taille']))
$taille = $_REQUEST['taille'];

if (isset($_REQUEST['id_marque']))
	$id_marque = $_REQUEST['id_marque'];

if (isset($_REQUEST['id_categorie']))
	$id_categorie = $_REQUEST['id_categorie'];

if (isset($_REQUEST['id_pers']))
	$id_pers = $_REQUEST['id_pers'];

//creation de l'objet
$ann = new annonce($titre_an,$prix_an,$description_an,$date_pub_an,$couleur_an,$region_an,$taille,$id_marque,$id_categorie,$id_pers);


switch ($action) {
	case "add1":
		include "vue/annonce/add_annonce.php";
        break;

    case "add":$ann->add($cnx);
        break; 
    
    case "edit1":$annonce=$ann->detail($cnx);
    include "vue/annonce/update_annonce.php";
        break;
        
    case "edit":$ann->edit($cnx);
        break;
    
    case "supp":$ann->supp($cnx);
        break; 
         
	case "liste":$annonces=$ann->liste($cnx);
	    include "vue/annonce/liste_annonce.php";
		break;

}
