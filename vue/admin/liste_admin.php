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
foreach($admins as $admin){

	echo "<tr>";
		echo "
			<td>".$admin->nom_pers."</td>
			<td>".$admin->prenom_pers."</td>
			<td>".$admin->email_pers."</td>
			<td>".$admin->tel_pers."</td>
			
			<td><a onclick=\"if(!confirm('Etes vous sure de supprimer?')) return false\" href='index.php?controller=admin&action=supp&id=".$admin->id."'>supp</a> <a href='index.php?controller=admin&action=edit1&id=".$admin->id."'>modif</a></td>
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