<h1>Modifier annonce </h1>
<form method="post" action="index.php?controller=annonce&action=edit" enctype="multipart/form-data">

 
	<br>Nom annonce: <input type="text" name="titre_an" value="<?php echo $annonce->titre_an;?>" required>
	<br> Prix annonce:<input type="text" name="prix_an" value="<?php echo $annonce->prix_an;?>" required>
	<br> Description:<TEXTAREA name="description_an" value="<?php echo $annonce->description_an;?>" rows=4 cols=40>Valeur par défaut</TEXTAREA>
	<br> Date :<input type="date" name="date_pub_an" value="<?php echo $annonce->date_pub_an;?>" required>
	<br> Couleur :<input type="text" name="couleur_an" value="<?php echo $annonce->couleur_an;?>" required>
	<br> Region :
    <select name="region_an">
        <option value="<?php echo $annonce->region_an;?>"><?php echo $annonce->region_an;?></option>
        <option value ="guava">Guava</option>
        <option value ="lychee">Lychee</option>
        <option value ="papaya">Papaya</option>
    </select> 

<?php 
  $mar=new marque($annonce->id_marque,"");
    $marque=$mar->detail($cnx);
  
?>
    <br> Marque :
    <select name="id_marque">
        <option value="<?php echo $annonce->id_marque;?>"><?php echo $marque->nom_marq; ?></option>
        <?php 
	
	$lis=$mar->liste($cnx);
	foreach($lis as $mar){
        if($mar->id!=$annonce->id_marque)
        {
        echo"<option    value =".$mar->id.">".$mar->nom_marq."</option>";
        }
	}
		?>
    </select> 
    <?php 
  $cats=new categorie($annonce->id_categorie,"");
    $catecorie=$cats->detail($cnx);
  
?>
    <br> categorie :
    <select name="id_categorie">
        <option value="<?php echo $annonce->id_categorie;?>"><?php echo $catecorie->nom_cat;?></option>
        <?php 
	
	$lis=$cats->liste($cnx);
	foreach($lis as $ca){
        if($ca->id!=$annonce->id_categorie)
        {
        echo"<option   value =".$ca->id.">".$ca->nom_cat."</option>";
        }
	}
		?>
    </select> 
	<br> taille :<input type="text" name="taille" value="<?php echo $annonce->taille;?>" required>
    <input type="hidden" name="id_an" value="<?php echo $annonce->id_an;?>">
    <input type="hidden" name="id_pers" value="<?php echo $annonce->id_pers;?>">
	<br> <input type="submit" name="submit" value="modifier">	
</form>
