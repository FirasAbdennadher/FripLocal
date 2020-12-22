<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-users"></i></i>
							Liste Des Utilisateurs
						</h3>

								<input class="btn btn-block btn-secondary btn-sx  float-right" type="button" value="Export to PDF" onclick="window.location.href='pdf_dashboard_pdfetat1.html'">

								<input class="btn btn-block btn-secondary btn-sx  float-right" type="button" value="Export to Excel" onclick="window.location.href='excel_dashboard_exceletat1.html'">
					</div>
					<!-- /.card-header -->
					<?php
					echo '<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th>nom</th>
							<th>prenom</th>
							<th>email</th>
							<th>numero</th>
							<th>status</th>
							<th>role</th>
							<th>actions</th>
						</tr>
						</thead>
						<tbody>
						';
					foreach ($personnes as $personne) {

						echo "<tr>";
						echo "

									<td>" . $personne->nom_pers . "</td>
									<td>" . $personne->prenom_pers . "</td>
									<td>" . $personne->email_pers . "</td>
									<td>" . $personne->tel_pers . "</td>
									<td>" . $personne->status . "</td>
									<td>" . $personne->id_role . "</td>
									<td> 
									
									
									<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; else window.location.href='dashboard.php?controller=personne&action=supp&id=" . $personne->id . "'\" type='button' class='btn btn-block btn-danger btn-xs'>Supprimer</button>

									<button onclick=\"window.location.href='dashboard.php?controller=personne&action=edit1&id=" . $personne->id . "'\" type='button' class='btn btn-block btn-success btn-xs'>Status</button>
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
						<th>status</th>
						<th>role</th>
						<th>action</th>
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