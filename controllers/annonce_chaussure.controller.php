<?php //session_start();
include "models/annonce_chaussure.class.php";

//initialisation des parametres
$id_an="";
$nom_an="";
$prix_an="";
$description_an="";
$date_pub_an="";
$couleur_an="";
$region_an="";
$pointure_chauss_an="";

//recupétation des variables externes
if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];

    if (isset($_REQUEST['nom_an']))
	$nom_an = $_REQUEST['nom_an'];

if (isset($_REQUEST['id_an']))
	$id_an = $_REQUEST['id_an'];

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
    
if (isset($_REQUEST['pointure_chauss_an']))
$pointure_chauss_an = $_REQUEST['pointure_chauss_an'];

//creation de l'objet
$ann_chaus = new annonce_chaussure($nom_an,$prix_an,$description_an,$date_pub_an,$couleur_an,$region_an,$pointure_chauss_an);


switch ($action) {
	case "auth1":
		include "vue/abonnee/abn_auth.php";
		break;

	case "add1":
		include "vue/abonnee/add_annonce_chaussure.php";
        break;

    case "add":$ann_chaus->add($cnx);
        break; 
    
    
    case "edit1":$annonce_chaussure=$ann_chaus->detail($cnx);
    include "vue/abonnee/update_annonce_chaussure.php";
        break;
        
    case "edit":$ann_chaus->edit($cnx);
        break;
    
    case "supp":$ann_chaus->supp($cnx);
        break; 
         

	case "liste":$annonce_chaussures=$ann_chaus->liste($cnx);
	    include "liste_produit.php";
	    break;
	
	
}
