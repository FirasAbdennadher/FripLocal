<?php //session_start();
include "includes/fonction.class.php";
include "models/categorie.class.php";
include "models/souscategorie.class.php";



//initialisation des parametres
$id_sous="";
$nom_sous_cat = "";
$id="";
$nom_cat = "";
$categories="";
$idcategorie=array();
$nomcat=array();


//recupétation des variables externes

if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id_sous']))
$id_sous=$_REQUEST['id_sous'];


if (isset($_POST['nom_sous_cat']))
	$nom_sous_cat = $_POST['nom_sous_cat'];

if (isset($_POST['idcategorie']))
	$idcategorie = $_POST['idcategorie'];

if (isset($_REQUEST['nomcat']))
	$nomcat = explode(" ",$_REQUEST['nomcat']);
//creation de l'objet
$souscat = new souscategorie($id_sous,$nom_sous_cat,$idcategorie);
$cat = new categorie($id,$nom_cat);

switch ($action) {
	
	
		case "add1":
			$categories=$cat->liste($cnx);
			include "vue/souscategorie/souscategorie.php";
			
	break;
	
   case "add":
		$souscat->add($cnx);
		$souscat->addcontient($cnx);
        
	break;
	case "supp":$souscat->supp($cnx);
	break;
	
	case "liste":
	$souscategories=$souscat->liste($cnx);
	$tab=$souscat->listecat($cnx);
	include "vue/souscategorie/liste_souscategorie.php";
	break;
	
	case "edit1":
		$souscategorie=$souscat->detail($cnx);
		$categories=$cat->liste($cnx);
	include "vue/souscategorie/modifier_souscategorie.php";
	break;
	
	case "edit":$souscat->edit($cnx);
	$souscat->suppcontient($cnx);
	$souscat->addcontient($cnx);
	break;
	
	
}