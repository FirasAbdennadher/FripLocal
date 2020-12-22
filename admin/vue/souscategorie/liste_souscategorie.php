<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-bullhorn"></i></i>
							Liste Des Sous Categories
						</h3>
						<input class="btn btn-block btn-secondary btn-sm col-3 float-right" type="button" value="Nouveau Sous Categories" onclick="window.location.href='dashboard.php?controller=souscategorie&action=add1'">
					</div>

					<?php

					echo "<table border=1 class='table table-bordered table-striped'>
<tr>
	<th>Nom Sous Categorie</th>
	<th>Nom Categorie</th>
	<th style='width: 10%'>Action</th>
	
</tr>";

					$x = "";

					foreach ($souscategories as $souscategorie) {
						foreach ($tab as $tab1) {
							if ($souscategorie->id_sous === $tab1->id_sous) {
								$x .= ' ' . $tab1->nom_cat;
							}
						}

						echo "<tr>";
						echo "
			
			<td>" . $souscategorie->nom_sous_cat . "</td>
			<td>" . $x . "</td>

			<td>

			<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; else window.location.href='dashboard.php?controller=souscategorie&action=supp&id_sous=" . $souscategorie->id_sous . "'\" type='button' class='btn btn-block btn-danger btn-xs'>Supprimer</button>

			<button onclick=\"window.location.href='dashboard.php?controller=souscategorie&action=edit1&id_sous=" . $souscategorie->id_sous . "&nomcat=" . $x . "'\" type='button' class='btn btn-block btn-success btn-xs'>Status</button>
                        </td>
		";
						echo "</tr>";
						$x = "";
					}
					echo "</table>";
					?>

				</div>
			</section>
		</div>
	</div>
</section>