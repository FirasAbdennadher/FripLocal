<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Modifier admin
						</h3>
					</div>
<form method="post" action="dashboard.php?controller=personne&action=edit" enctype="multipart/form-data">

<br>Nom <input class="form-control" type="text" name="nom_pers" value="<?php echo $personne->nom_pers;?>" required>

<br>prenom : <input class="form-control"  type="text" name="prenom_pers" value="<?php echo $personne->prenom_pers;?>" required>

<br>prenom : <input class="form-control"  type="email" name="email_pers" value="<?php echo $personne->email_pers;?>" required>

<br>numero tel : <input class="form-control"  type="number" name="tel_pers" value="<?php echo $personne->tel_pers;?>" required>
<br> Valider <input class="form-control"  type="checkbox" name="status" value="Accepte" <?php if($personne->status=='Accepte') echo 'checked=checked';?>>
<br>password : <input class="form-control"  type="password" name="mdp_pers" value="<?php echo $personne->mdp_pers;?>" required>

<input  type="hidden" name="id" value="<?php echo $personne->id;?>">

<br><input class="form-control" type="submit" name="submit" value="Modifier">

</form> 
