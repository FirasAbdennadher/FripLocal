<?php //session_start()
include "includes/fonction.class.php";
include "models/photo.class.php";

//initialisation des parametres
$tab_ext=array('jpg','png','gif');
$fn=new fonction();
$id="";
$nom_photo = "";
$id_an= "2";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_REQUEST['photo_old']))
$nom_photo=$_REQUEST['photo_old'];

if(isset($_FILES['nom_photo']))
{

if(is_uploaded_file($_FILES['nom_photo']['tmp_name']))
{
	if(!empty($nom_photo))
	unlink("photos/".$nom_photo);

	$nom_photo=$_FILES['nom_photo']['name'];
	$tab=explode('.',$nom_photo);
	$ext=strtolower($tab[sizeof($tab)-1]);
	if(!in_array($ext,$tab_ext)){
		echo "erreur d extention!";
		exit();
	}
	
	$nom_photos=$fn->generer_chaine(8);
	
	$nom_photo=$nom_photos.".".$ext;
	
	copy($_FILES['nom_photo']['tmp_name'],'photos/'.$nom_photo);
}
}
//creation de l'objet

$pho = new photo($id,$nom_photo,$id_an);


switch ($action) {
	
	case "add1":
		case "add1":include "vue/photo/photo.php";
	break;
	
	case "add":$pho->add($cnx);
	break;
	
	case "supp":$pho->supp($cnx);
	break;
	
	case "liste":$photos=$pho->liste($cnx);
	include "vue/photo/liste_photo.php";
	break;
	
	case "edit1":$photo=$pho->detail($cnx);
	include "vue/photo/modifier_photo.php";
	break;
	
	case "edit":$pho->edit($cnx);
	break;
}