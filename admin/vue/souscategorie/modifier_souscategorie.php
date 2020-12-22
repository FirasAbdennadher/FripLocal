<h1>Modifier sous categorie</h1>
<form method="post" action="dashboard.php?controller=souscategorie&action=edit" enctype="multipart/form-data">

<br>nom sous categorie : <input type="text" name="nom_sous_cat" value="<?php echo $souscategorie->nom_sous_cat;?>" required>

<input type="hidden" name="id_sous" value="<?php echo $souscategorie->id_sous;?>">

<br>nom categorie : <select  multiple="multiple" name="idcategorie[]"  required>
<?php

foreach($categories as $categorie)
{ ?>
    <option <?php foreach($nomcat as $nc) {if ($categorie->nom_cat==$nc ) echo 'selected' ;}  ?> value=<?php echo "$categorie->id";?>><?php echo "$categorie->nom_cat";?></option>;
   
    	
    <?php }?>

</select>

<br><input type="submit" name="submit" value="Modifier">

</form>