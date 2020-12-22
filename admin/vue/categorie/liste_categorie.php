<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Liste des categories
						</h3>
						<input class="btn btn-block btn-secondary btn-sm col-3 float-right" type="button" value="Nouveau categorie" onclick="window.location.href='dashboard.php?controller=categorie&action=add1'">
					</div>

					<?php
					echo '<table border=1 class="table table-bordered table-striped">
							<tr>
								<th>Nom categorie</th>
								<th>Action</th>
								
							</tr>';
					foreach ($categories as $categorie) {

						echo "<tr>";
						echo "
			
							<td>" . $categorie->nom_cat . "</td>
							<td style='width: 10%'>
							
							<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; else window.location.href='dashboard.php?controller=categorie&action=supp&id=" . $categorie->id . "'\" type='button' class='btn btn-block btn-danger btn-xs'>Supprimer</button>

							<button onclick=\"window.location.href='dashboard.php?controller=categorie&action=edit1&id=" . $categorie->id . "'\" type='button' class='btn btn-block btn-success btn-xs'>Status</button>
							
											
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