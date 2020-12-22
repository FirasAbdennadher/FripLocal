<?php session_start();
include_once 'includes/connexion.php'; 
include_once 'includes/security.php'; 
include 'php-firewall/firewall.php';
//initialisation des variables $controleur et $action 
$controller='dashboard';
$action='';

//Recupération 
if(isset($_REQUEST['controller'])) 
	$controller =$_REQUEST['controller']; 

if(isset($_REQUEST['action'])) 
	$action =$_REQUEST['action']; 


include('fpdf/fpdf.php');
include('models/pdf.class.php');
 $pdf = new PDF();

include 'controllers/'.$controller.'.controller.php'; 


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachement; filename=doc_ecxel.xls");

?> 