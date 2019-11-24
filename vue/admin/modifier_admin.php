<h1>Modifier admin</h1>
<form method="post" action="index.php?controller=personne&action=edit" enctype="multipart/form-data">

<br>nom : <input type="text" name="nom_pers" value="<?php echo $personne->nom_pers;?>" required>

<br>prenom : <input type="text" name="prenom_pers" value="<?php echo $personne->prenom_pers;?>" required>

<br>prenom : <input type="email" name="email_pers" value="<?php echo $personne->email_pers;?>" required>

<br>numero tel : <input type="number" name="tel_pers" value="<?php echo $personne->tel_pers;?>" required>
<br> Valider <input type="checkbox" name="status" value="Accéptée" <?php if($personne->status=='Accéptée') echo 'checked=checked';?>>
<br>password : <input type="password" name="mdp_pers" value="<?php echo $personne->mdp_pers;?>" required>

<input type="hidden" name="id" value="<?php echo $personne->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>

	