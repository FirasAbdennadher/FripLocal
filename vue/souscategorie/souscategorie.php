<h1>ajout sous categorie</h1>
<form method="post" action="index.php?controller=souscategorie&action=add" enctype="multipart/form-data">
<br>nom sous categorie : <input type="text" name="nom_sous_cat"  required>

<br>nom categorie : <select  multiple="multiple" name="idcategorie[]"  required>
<?php

foreach($categories as $categorie){

	echo "<option value=".$categorie->id.">".$categorie->nom_cat."</option>";	
}

?> 
</select>

<br><input type="submit" name="submit" value="ajouter">
</form>