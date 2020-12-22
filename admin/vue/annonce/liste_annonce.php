<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-bullhorn"></i></i>
							Liste des annonces
						</h3>
					</div>

					<!-- /.card-header -->
         
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>Titre</th>
							<th>Prix</th>
							<th>Date de publication</th>
							<th>Region</th>
							<th>Marque</th>
							<th>Categorie</th>
							<th>Status</th>

							<th>actions</th>
						</tr>
						</thead>
						<tbody>
            <?php 
          foreach ($annonces as $annonce) {
          $mar = new marque($annonce->id_marque, "");
          $cat = new categorie($annonce->id_categorie, "");
          $marque = $mar->detail($cnx);
          $categ = $cat->detail($cnx);

						echo "<tr>";
						echo "

									<td>" . $annonce->titre_an . "</td>
									<td>" .  $annonce->prix_an . "</td>
									<td>" . $annonce->date_pub_an . "</td>
									<td>" . $annonce->region_an . "</td>
									<td>" .$marque->nom_marq . "</td>
									<td>" . $categ->nom_cat . "</td>
									<td>" . $annonce->status . "</td>

									<td> 
									

									<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; else window.location.href='dashboard.php?controller=annonce&action=supp&id_an=" . $annonce->id_an . "'\" type='button' class='btn btn-block btn-danger btn-xs'>Supprimer</button>

									<button onclick=\"window.location.href='dashboard.php?controller=annonce&action=edit1&id_an=" . $annonce->id_an . "'\" type='button' class='btn btn-block btn-success btn-xs'>Status</button>
								";
						echo "</tr>";
					}
					echo "
						</tbody>
						<tfoot>
						<tr>

						<th>Titre</th>
						<th>Prix</th>
						<th>Date de publication</th>
						<th>Region</th>
						<th>Marque</th>
						<th>Categorie</th>
						<th>Status</th>

						<th>actions</th>

						</tr>
						</tfoot>

						</table>";

					?>
				</div>
			</section>
			<!-- /.card-body -->
		</div>
	</div>
</section>
<!-- /.card -->


		
<script>
function  f1(){
	alert('haha');
}
</script>