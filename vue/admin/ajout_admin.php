<h1>Ajouter admin</h1>
<form method="post" action="index.php?controller=personne&action=add" enctype="multipart/form-data">
<br>nom : <input type="text" name="nom_pers" required>
<br>prenom : <input type="text" name="prenom_pers" required>
<br>Email : <input type="email" name="email_pers" required>
<br>Numero : <input type="number" name="tel_pers" required>
<br>password : <input type="password" name="mdp_pers" required>
<br><input type="submit" name="submit" value="Ajouter">
</form>