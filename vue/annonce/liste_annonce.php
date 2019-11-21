<div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<?php
echo '<table  id="example1" class="table table-bordered table-striped">
<thead>
<tr>



	<th>titre</th>
	<th>prix</th>
	<th>description</th>
	<th>date publication</th>
    <th>couleur</th>
    <th>region</th>
    <th>taille</th>
    <th>marque</th>
    <th>categorie</th>
	<th>action</th>
</tr>
</thead>
<tbody>
';
foreach($annonces as $annonce){
    $titre_an="";
    $prix_an="";
    $description_an="";
    $date_pub_an="";
    $couleur_an="";
    $region_an="";
    $taille="";
    $id_marque="";
    $id_categorie="";
    
	echo "<tr>";
		echo "
			
			<td>".$annonce->titre_an."</td>
			<td>".$annonce->prix_an."</td>
			<td>".$annonce->description_an."</td>
			<td>".$annonce->date_pub_an."</td>
      <td>".$annonce->couleur_an."</td>
      <td>".$annonce->region_an."</td>
			<td>".$annonce->taille."</td>
			<td>".$annonce->id_marque."</td>
			<td>".$annonce->id_categorie."</td>
			<td><a onclick=\"if(!confirm('Etes vous sure de supprimer?')) return false\" href='index.php?controller=annonce&action=supp&id=".$annonce->id_an."'>supp</a> <a href='index.php?controller=annonce&action=edit1&id=".$annonce->id_an."'>modif</a></td>
		";
	echo "</tr>";
	
}
echo "
</tbody>
<tfoot>
<tr>

<th>titre</th>
<th>prix</th>
<th>description</th>
<th>date publication</th>
  <th>couleur</th>
  <th>region</th>
  <th>taille</th>
  <th>marque</th>
  <th>categorie</th>
<th>action</th>
</tr>
</tfoot>

</table>";

?>
</div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->