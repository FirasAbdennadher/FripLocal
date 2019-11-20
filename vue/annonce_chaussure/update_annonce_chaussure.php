<h1>Ajouter annonce chaussure</h1>
<form method="post" action="../controllers/annonce_chaussure.controller.php?action=edit" enctype="multipart/form-data">

    <h1>Ajout Annonce chaussure</h1>
	<br>Nom annonce: <input type="text" name="nom_an" value="<?php echo $annonce_chaussure->nom_an;?>" required>
	<br> Prix annonce:<input type="text" name="prix_an" value="<?php echo $annonce_chaussure->prix_an;?>" required>
	<br> Description:<TEXTAREA name="description_an" value="<?php echo $annonce_chaussure->description_an;?>" rows=4 cols=40>Valeur par défaut</TEXTAREA>
	<br> Date :<input type="date" name="date_pub_an" value="<?php echo $annonce_chaussure->date_pub_an;?>" required>
	<br> Couleur :<input type="text" name="couleur_an" value="<?php echo $annonce_chaussure->couleur_an;?>" required>
	<br> Region :
    <select name="region_an">
        <option value="<?php echo $annonce_chaussure->region_an;?>"><?php echo $annonce_chaussure->region_an;?></option>
        <option value ="guava">Guava</option>
        <option value ="lychee">Lychee</option>
        <option value ="papaya">Papaya</option>
    </select> 
	<br> Pointure :<input type="text" name="pointure_chauss_an" value="<?php echo $annonce_chaussure->pointure_chauss_an;?>" required>
    <input type="hidden" name="id_an" value="<?php echo $annonce_chaussure->id_an;?>">
	<br> <input type="submit" name="submit" value="ajouter">	
</form>
