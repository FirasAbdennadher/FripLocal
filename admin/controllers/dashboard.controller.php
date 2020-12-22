<?php //session_start();
include "includes/fonction.class.php";
include "models/dashboard.class.php";

//initialisation des parametres

$fn=new fonction();
$pays="";

//recupétation des variables externes

if(isset($_REQUEST['pays']))
$pays=$_REQUEST['pays'];


//creation de l'objet
$insc=new dashboard($pays);

switch($action){
	case "index":include "views/dashboard/index.php";
	break;
	
	case "pdfetat1":$results=$insc->etat1($cnx);
	include "vue/admin/pdfetat1.php";
	break;
	
	case "exceletat1":$results=$insc->etat1($cnx);
	include "vue/admin/exceletat1.php";
	break;
}
?>