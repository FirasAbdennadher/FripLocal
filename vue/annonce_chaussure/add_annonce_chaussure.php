<h1>Ajouter annonce chaussure</h1>
<form method="post" action="../controllers/annonce_chaussure.controller.php?action=add" enctype="multipart/form-data">
	<br>Nom annonce: <input type="text" name="nom_an" required>
	<br> Prix annonce:<input type="text" name="prix_an" required>
	<br> Description:<TEXTAREA name="description_an" rows=4 cols=40>Valeur par défaut</TEXTAREA>
	<br> Date :<input type="date" name="date_pub_an" required>
	<br> Couleur :<input type="text" name="couleur_an" required>
	<br> Region :
    <select name="region_an">
        <option value ="none">Nothing</option>
        <option value ="guava">Guava</option>
        <option value ="lychee">Lychee</option>
        <option value ="papaya">Papaya</option>
    </select> 
	<br> Pointure :<input type="text" name="pointure_chauss_an" required>
	<br> <input type="submit" name="submit" value="ajouter">	
</form>