<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-bullhorn"></i></i>
							Liste des marques
						</h3>
						<input class="btn btn-block btn-secondary btn-sm col-3 float-right" type="button" value="nouveau marque" onclick="window.location.href='dashboard_marque_add1.html'">
					</div>
					
					<?php
					echo "<table border=1 class='table table-bordered table-striped'>
						<tr>
						<th>Nom Marque</th>
						<th>Action</th>
							
						</tr>";
					foreach ($marques as $marque) {

						echo "<tr>";
						echo "
			
			<td>" . $marque->nom_marq . "</td>
			<td style='width: 10%'>

			<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; else window.location.href='dashboard.php?controller=marque&action=supp&id=" . $marque->id . "'\" type='button' class='btn btn-block btn-danger btn-xs'>Supprimer</button>

			<button onclick=\"window.location.href='index.php?controller=marque&action=edit1&id=" . $marque->id . "'\" type='button' class='btn btn-block btn-success btn-xs'>Status</button>
                        </td>
		";
						echo "</tr>";
					}
					echo "</table>";
					?>
				</div>
			</section>
		</div>
	</div>
</section>