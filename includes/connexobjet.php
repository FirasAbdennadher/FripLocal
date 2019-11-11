<?php
try{
	$cnx = new pdo('mysql:host=localhost;dbname=fripe_local','root','');
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(PDOException){
	echo "Connexion à MySQL impossible: ",$e->getMessage();
	exit();//die()
}
?>