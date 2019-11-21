<div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des admins</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<?php
echo '<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>



	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>numero</th>
	<th>action</th>
</tr>
</thead>
<tbody>
';
foreach($personnes as $personne){

	echo "<tr>";
		echo "
			<td>".$personne->nom_pers."</td>
			<td>".$personne->prenom_pers."</td>
			<td>".$personne->email_pers."</td>
			<td>".$personne->tel_pers."</td>
			
			<td><a onclick=\"if(!confirm('Etes vous sure de supprimer?')) return false\" href='index.php?controller=personne&action=supp&id=".$personne->id_pers."'>supp</a> <a href='index.php?controller=personne&action=edit1&id=".$personne->id_pers."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "
</tbody>
<tfoot>
<tr>

<th>nom</th>
<th>prenom</th>
<th>email</th>
<th>numero</th>
<th>action</th>
</tr>
</tfoot>

</table>";

?>
</div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->