<h1>Modifier photo</h1>
<form method="post" action="index.php?controller=photo&action=edit" enctype="multipart/form-data">


<img src="photos/<?php echo $photo->nom_photo;?>" width="100">
<input type="hidden" name="photo_old" value="<?php echo $photo->nom_photo;?>">

<br>photo : <input type="file" name="nom_photo">

<input type="hidden" name="id" value="<?php echo $photo->id;?>">

<br><input type="submit" name="submit" value="Modifier">

</form>