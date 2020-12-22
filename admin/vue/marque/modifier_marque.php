<h1>Modifier marque</h1>
<form method="post" action="dashboard.php?controller=marque&action=edit" enctype="multipart/form-data">

<br>nom categorie : <input type="text" name="nom_marq" value="<?php echo $marque->nom_marq;?>" required>

<input type="hidden" name="id" value="<?php echo $marque->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>