<?php //session_start();
include "includes/fonction.class.php";
include "models/annonce.class.php";
include "models/photo.class.php";
include "models/personne.class.php";
include "models/categorie.class.php";
include "models/marque.class.php";


//initialisation des parametres 
$id_an = "";
$titre_an = "";
$prix_an = "";

$description_an = "";
$date_pub_an =  date("Y-m-d");
$couleur_an = "";
$region_an = "";
$filepond=array();
$taille = "";
$id_marque = "";
$id_categorie = "";
$photos = array();
$id_pers = "";
$rech_region = "";
$rech_nom = "";
$rech_categorie = "";
$rech_marque = "";
$ch = "";
$fn = new fonction();
if (isset($_POST['status']))
	$status = $_POST['status'];
else $status = 'non accepte';

//recupétation des variables externes

if (isset($_REQUEST['id_an']))
	$id_an = $_REQUEST['id_an'];

if (isset($_POST['titre_an']))
	$titre_an = $_POST['titre_an'];

if (isset($_POST['prix_an']))
	$prix_an = $_POST['prix_an'];

if (isset($_POST['description_an']))
	$description_an = $_POST['description_an'];

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

if (isset($_SESSION['id']))
	$id_pers = $_SESSION['id'];

//************************************************************************************************************************* */

if (isset($_POST['rech_nom'])) {
	if ($_POST['rech_nom'] != "") {
		if ($ch == "") {
			$rech_nom = " titre_an = '" . $_POST['rech_nom'] . "'";
			$ch = $ch . $rech_nom;
		} else {
			$rech_nom = " and titre_an = '" . $_POST['rech_nom'] . "'";
			$ch = $ch . $rech_nom;
		}
	}
}

if (isset($_POST['rech_region'])) {
	if ($_POST['rech_region'] != "") {
		if ($ch == "") {
			$rech_region = "region_an = '" . $_POST['rech_region'] . "'";
			$ch = $ch . $rech_region;
		} else {
			$rech_region = " and region_an = '" . $_POST['rech_region'] . "'";
			$ch = $ch . $rech_region;
		}
	}
}

if (isset($_POST['rech_marque'])) {
	if ($_POST['rech_marque'] != "") {
		if ($ch == "") {
			$rech_marque = " id_marque = '" . $_POST['rech_marque'] . "'";
			$ch = $ch . $rech_marque;
		} else {
			$rech_marque = " and id_marque = '" . $_POST['rech_marque'] . "'";
			$ch = $ch . $rech_marque;
		}
	}
}


if (isset($_POST['rech_categorie'])) {
	if ($_POST['rech_categorie'] != "") {
		if ($ch == "") {
			$rech_categorie = " id_categorie = '" . $_POST['rech_categorie'] . "'";
			$ch = $ch . $rech_categorie;
		} else {
			$rech_categorie = " and id_categorie = '" . $_POST['rech_categorie'] . "'";
			$ch = $ch . $rech_categorie;
		}
	}
}




if (isset($_POST['filepond'])) 
    $filepond= $_POST['filepond'];
	$filePondArray=$filepond;
    // RECEIVE UPLOADS:

   
 
    $baseFileLocation = 'photos/';
    $numFilePondObjects = sizeof($filePondArray);
    
 
    
 
    // iterate through the objects...
    for ($xx=0; $xx<$numFilePondObjects; $xx++) {
 
         $thisFilePondJSON_object = $filePondArray[$xx];
  
         $thisFilePondArray = json_decode($thisFilePondJSON_object, true);
  
         // isolate the encoded pics...
        $thisFilePondArray_picData = $thisFilePondArray['data'];
        $thisFilePondArray_numPics = sizeof($thisFilePondArray_picData);
      
        // iterate through pics in this object...
        $nom_photo=$fn->generer_chaine(8);
            $thisPic_version = $thisFilePondArray_picData[1]['name'];
            $thisPic_name_temp = 'photo_' .$nom_photo  .'.jpg';
            $thisPic_encodedData = $thisFilePondArray_picData[1]['data'];
            $thisPic_decodedData = base64_decode($thisPic_encodedData);
           $thisPic_fullPathAndName = $baseFileLocation . $thisPic_name_temp;   
           
        file_put_contents($thisPic_fullPathAndName, $thisPic_decodedData);
		array_push($photos, $thisPic_name_temp);
        
  
    }


if (isset($_REQUEST['photo_old']))
	$photos = $_REQUEST['photo_old'];


if (isset($_FILES['photos'])) {
	$dossier = 'photos/';
	$taille_maxi = 10000000;
	$extensions = array('.jpg', '.jpeg', '.png', '.gif');
	$fichier_temp = $_FILES['photos']['tmp_name'];

	$nbfichiersEnvoyes = count($fichier_temp);
	if ($nbfichiersEnvoyes > 10)
		$nbfichiersEnvoyes = 10;
	for ($i = 0; $i < $nbfichiersEnvoyes; $i++) {
		$fichier = basename($_FILES['photos']['name'][$i]);
		//array_push($netflix, 'Shaft', 'Mute', 'Clinical', 'Blue Jay', 'Candy Jar');
		$fichier_temp = $_FILES['photos']['tmp_name'][$i];

		$taille = filesize($_FILES['photos']['tmp_name'][$i]);

		$extension = strrchr($_FILES['photos']['name'][$i], '.');

		if (!in_array($extension, $extensions)) $erreur = '<span class="non">Vous devez uploader le fichier' . $i . ' de type JPEG ou JPG</span>';
		if ($taille > $taille_maxi)  $erreur = 'Le fichier' . $i . ' est trop gros...';
		if (!isset($erreur)) {
			$nom_photo = $fn->generer_chaine(8);
			$fichier = $nom_photo . $extension;
			array_push($photos, $fichier);
			if (move_uploaded_file($fichier_temp, $dossier . $fichier)) {
				echo '<span class="okdac">Upload' . $i . ' effectué avec succès !</span>';
			} else {
				echo '<span class="non">Echec de l\'upload' . $i . ' !</span>';
			}
		}
	}
}

//************************************************************************************************************************* */
//creation de l'objet
$ann = new annonce($id_an, $titre_an, $prix_an, $description_an, $date_pub_an, $couleur_an, $region_an, $taille, $id_marque, $id_categorie, $id_pers, $photos, $status);
$pers = new personne($id_pers, "", "", "", "", "", "", "");


switch ($action) {
	case "add1":
		include "vue/annonce/add_annonce.php";
		break;

	case "add":
		$ann->add($cnx);
		break;

	case "edit1":
		$annonce = $ann->detail($cnx);
		include "vue/annonce/update_annonce.php";
		break;

	case "edit":
		$ann->edit($cnx);
		break;

	case "supp":
		$ann->supp($cnx);
		break;

	case "liste":
		$annonces = $ann->liste($cnx);
		include "vue/annonce/liste_annonce.php";
		break;

	case "liste_ann_pers":
		$annonces = $ann->list_by_user($cnx);
		$personne = $pers->detail($cnx);
		include "vue/abonnee/profile.php";
		break;

	case "liste_avance":
		$annonces = $ann->recherche_avance($cnx, $ch);
		include "vue/annonce/liste_annonce.php";
		break;

	case "det":
		include "vue/annonce/det_annonce.php";
		break;
}
