<h1>Modifier categorie</h1>
<form method="post" action="dashboard.php?controller=categorie&action=edit" enctype="multipart/form-data">

<br>nom categorie : <input type="text" name="nom_cat" value="<?php echo $categorie->nom_cat;?>" required>

<input type="hidden" name="id" value="<?php echo $categorie->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>