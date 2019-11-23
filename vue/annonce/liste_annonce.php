<div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <input type="button" value="nouvelle annoce" onclick="window.location.href='index.php?controller=annonce&action=add1'">
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
  $mar=new marque($annonce->id_marque,"");
$cat=new categorie($annonce->id_categorie,"");
  $marque=$mar->detail($cnx);
  $categ=$cat->detail($cnx);


	echo "<tr>";
		echo "
			
			<td>".$annonce->titre_an."</td>
			<td>".$annonce->prix_an."</td>
			<td>".$annonce->description_an."</td>
			<td>".$annonce->date_pub_an."</td>
      <td>".$annonce->couleur_an."</td>
      <td>".$annonce->region_an."</td>
			<td>".$annonce->taille."</td>
			<td>".$marque->nom_marq."</td>
			<td>".$categ->nom_cat."</td>
			<td><a onclick=\"if(!confirm('Etes vous sure de supprimer?')) return false\" href='index.php?controller=annonce&action=supp&id_an=".$annonce->id_an."'>supp</a> <a href='index.php?controller=annonce&action=edit1&id_an=".$annonce->id_an."'>modif</a></td>
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