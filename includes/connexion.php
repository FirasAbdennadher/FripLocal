<?php 
$cnx= new PDO('mysql:host=localhost;dbname=fripe', 'root', 'med'); 
//ajouter cette instruction pour permettre l’affichage des messages d’erreurs 
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
?>
