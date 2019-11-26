<?php


?>
<h1>Ajouter annonce </h1>

<form method="post" action="index.php?controller=annonce&action=add" enctype="multipart/form-data">
	<br>Nom annonce: <input type="text" name="titre_an" required>
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
	
	<br> Marque :
    <select name="id_marque">
	<?php 
	$mar=new marque("","");
	$lis=$mar->liste($cnx);
	foreach($lis as $mar){
		echo"<option value =".$mar->id.">".$mar->nom_marq."</option>";
	}
		?>
		
	</select> 
	<br> categorie :
	
    <select name="id_categorie">
	<?php 
	$cat=new categorie("","");
	$lis=$cat->liste($cnx);
	foreach($lis as $cat){
		echo"<option value =".$cat->id.">".$cat->nom_cat."</option>";
	}
		?>
			
    </select> 
	<br> Pointure :<input type="text" name="taille" required>
	<br> Taille :
    <select name="taille">
        <option value ="S">S</option>
        <option value ="XS">XS</option>
        <option value ="M">M</option>
		<option value ="L">L</option>
		<option value ="XL">XL</option>
        <option value ="XXL">XXL</option>
		<option value ="XXXL">XXXL</option>
		<option value="autre">autre</option>
       
	</select> 

	<br> <input type="submit" name="submit" value="ajouter">	
</form>

