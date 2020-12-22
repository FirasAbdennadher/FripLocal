<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-user-plus"></i></i>
							Ajouter annonce
						</h3>
					</div>

					<form id="ff" method="post" action="dashboard.php?controller=annonce&action=add" enctype="multipart/form-data">
						<div class="card-body">

							<div class="row">

								<div class="col-sm-4">
									<div class="form-group">
										<label>Nom annonce</label>
										<input readonly="true"class="form-control" type="text" name="titre_an" value="<?php echo $annonce->titre_an; ?>" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Prix annonce</label>
										<input readonly="true"class="form-control" type="text" name="prix_an" value="<?php echo $annonce->prix_an; ?>" required>

									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="form-control input-group-text"><i class="fas fa-calendar-alt"></i></span>
											</div>

											<input readonly="true"class="form-control" type="date" name="date_pub_an" value="<?php echo $annonce->date_pub_an; ?>" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row">


								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Couleur</label>
										<input readonly="true"class="form-control" type="text" name="couleur_an" value="<?php echo $annonce->couleur_an; ?>" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Region</label>
										<select disabled class="form-control" name="region_an">
											<option value="<?php echo $annonce->region_an; ?>"><?php echo $annonce->region_an; ?></option>
											<option value="Sfax">Sfax</option>
											<option value="Tunis">Tunis</option>
											<option value="Mahdia">Mahdia</option>
											<option value="Gabes">Gabes</option>
											<option value="Nabel">Nabel</option>
											<option value="Sidi Bouziid">Sidi Bouziid</option>
											<option value="Touzer">Touzer</option>
											<option value="Gbeli">Gbeli</option>
										</select>
									</div>
								</div>
								<?php
								$mar = new marque($annonce->id_marque, "");
								$marque = $mar->detail($cnx);

								?>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Marque</label>
										<select disabled class="form-control" name="id_marque">
											<option value="<?php echo $annonce->id_marque; ?>"><?php echo $marque->nom_marq; ?></option>
											<?php

											$lis = $mar->liste($cnx);
											foreach ($lis as $mar) {
												if ($mar->id != $annonce->id_marque) {
													echo "<option    value =" . $mar->id . ">" . $mar->nom_marq . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<?php
								$cats = new categorie($annonce->id_categorie, "");
								$catecorie = $cats->detail($cnx);

								?>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Categorie</label>
										<select readonly="true" class="form-control" name="id_categorie">
											<option disabled  value="<?php echo $annonce->id_categorie; ?>"><?php echo $catecorie->nom_cat; ?></option>
											<?php

											$lis = $cats->liste($cnx);
											foreach ($lis as $ca) {
												if ($ca->id != $annonce->id_categorie) {
													echo "<option   value =" . $ca->id . ">" . $ca->nom_cat . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>


								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Taille/Pointure</label>
										<input readonly="true" class="form-control" type="text" name="taille" value="<?php echo $annonce->taille; ?>" required>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<input readonly="true" class="form-control" type="text" name="taille" value="<?php echo $annonce->description_an; ?>" required>
									</div>
								</div>

								
								<input readonly="true"type="hidden" name="id_an" value="<?php echo $annonce->id_an; ?>">
								<input readonly="true"type="hidden" name="id_pers" value="<?php echo $annonce->id_pers; ?>">
								<div class="gallery" width="180"></div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

								<script type="text/javascript">
									function readURL(input) {

										if ($('#image')[0].files.length > 10) {
											alert('choisir maximume 10 images');


										}

									}

									$(function() {
										// Multiple images preview in browser
										var imagesPreview = function(input, placeToInsertImagePreview) {

											if (input.files) {
												var filesAmount = input.files.length;
												if (filesAmount > 10)
													filesAmount = 10;
												for (i = 0; i < filesAmount; i++) {
													var reader = new FileReader();

													reader.onload = function(event) {
														$($.parseHTML('<img width="300">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
													}

													reader.readAsDataURL(input.files[i]);
												}
											}

										};

										$('#image').on('change', function() {
											imagesPreview(this, 'div.gallery');
										});
									});
								</script>
							</div>
						</div>
						<div class="card-footer">
							<br> Valider Annonce <input readonly="true"type="checkbox" name="status" value="Accepte" <?php if ($annonce->status == 'Accepte') echo 'checked=checked'; ?>>

							<input readonly="true"type="submit" value="Modifier" class="btn btn-primary float-right">
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>
</section>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		bsCustomFileInput.init();
	});
</script>