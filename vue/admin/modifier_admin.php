<h1>Modifier admin</h1>
<form method="post" action="index.php?controller=admin&action=edit" enctype="multipart/form-data">

<br>nom : <input type="text" name="nom_pers" value="<?php echo $admin->nom_pers;?>" required>

<br>prenom : <input type="text" name="prenom_pers" value="<?php echo $admin->prenom_pers;?>" required>

<br>prenom : <input type="email" name="email_pers" value="<?php echo $admin->email_pers;?>" required>

<br>numero tel : <input type="number" name="tel_pers" value="<?php echo $admin->tel_pers;?>" required>
<br>

<br>password : <input type="password" name="mdp_pers" value="<?php echo $admin->mdp_pers;?>" required>

<input type="hidden" name="id_pers" value="<?php echo $admin->id_pers;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>

	