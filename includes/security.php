
<?php
if(!isset($_SESSION['email_pers']) || !isset($_SESSION['mdp_pers'])){
	header("location:login.php");
	exit;
}