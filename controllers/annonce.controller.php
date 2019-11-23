<?php //session_start();
include "includes/fonction.class.php";
include "models/annonce.class.php";
include "models/categorie.class.php";
include "models/marque.class.php";


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

//recupétation des variables externes

if (isset($_REQUEST['id_an']))
	$id_an = $_REQUEST['id_an'];

if (isset($_POST['titre_an']))
	$titre_an = $_POST['titre_an'];

if (isset($_POST['prix_an']))
	$prix_an = $_POST['prix_an'];

if (isset($_POST['description_an']))
	$description_an = $_POST['description_an'];

if (isset($_POST['date_pub_an']))
	$date_pub_an = $_POST['date_pub_an'];

if (isset($_POST['couleur_an']))
	$couleur_an = $_POST['couleur_an'];

if (isset($_POST['region_an']))
$region_an = $_POST['region_an'];
    
if (isset($_POST['taille']))
$taille = $_POST['taille'];

if (isset($_POST['id_marque']))
	$id_marque = $_POST['id_marque'];

if (isset($_POST['id_categorie']))
	$id_categorie = $_POST['id_categorie'];



//creation de l'objet
$ann = new annonce($id_an,$titre_an,$prix_an,$description_an,$date_pub_an,$couleur_an,$region_an,$taille,$id_marque,$id_categorie,$_SESSION['id']);



switch ($action) {
	case "add1":
		include "vue/annonce/add_annonce.php";
        break;

	case "add":
		
		$ann->add($cnx);

        break; 
    
    case "edit1":$annonce=$ann->detail($cnx);
    include "vue/annonce/update_annonce.php";
        break;
        
    case "edit":$ann->edit($cnx);
        break;
    
	case "supp":
		
		$ann->supp($cnx);
        break; 
         
	case "liste":
		
		$annonces=$ann->liste($cnx);
	
	    include "vue/annonce/liste_annonce.php";
		break;

}
