<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(ac/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">

			<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


				<div class="row justify-content-center mt-5">
					<div class="col-md-8 text-center">
						<h1>Ajouter annonce</h1>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>

<div class="site-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 mb-5" data-aos="fade">
				<form id="ff" method="post" action="index.php?controller=annonce&action=add" enctype="multipart/form-data">

					<div class="row form-group">

						<div class="col-md-12">
							<label class="text-black" for="email">Type: </label>
							<select class="form-control" onchange="d=document.getElementById('tp_an').value;
							;if(d=='Chaussures') document.getElementById('pointure').style.display=''  
							else if (d='Vêtements') document.getElementById('taille').style.display=''  
							";
							 id="tp_an">
								<option selected disabled value="Choisir">Choisir Type</option>
								<option value="Chaussures">Chaussures</option>
								<option value="Vêtements">Vêtements</option>
							</select>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="email">Titre: </label>
							<input type="text" id="text" class="form-control" name="titre_an" required>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="email">Prix: </label>
							<input type="number" class="form-control" name="prix_an" required>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="message">Description:</label>
							<textarea name="description_an" id="message" cols="30" rows="7" class="form-control" placeholder="Votre description ici ..."></textarea>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="email">Region: </label>
							<select class="form-control" name="region_an">
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

						<div class="col-md-6">
							<label class="text-black" for="email">Couleur: </label>
							<input type="text" class="form-control" name="couleur_an" required>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="email">Marque: </label>
							<select class="form-control" name="id_marque">
								<?php
								$mar = new marque("", "");
								$lis = $mar->liste($cnx);
								foreach ($lis as $mar) {
									echo "<option value =" . $mar->id . ">" . $mar->nom_marq . "</option>";
								}
								?>
							</select>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="email">Categorie: </label>
							<select class="form-control" name="id_categorie">
								<?php
								$cat = new categorie("", "");
								$lis = $cat->liste($cnx);
								foreach ($lis as $cat) {
									echo "<option value =" . $cat->id . ">" . $cat->nom_cat . "</option>";
								}
								?>
							</select>
						</div>

						<div class="col-md-6">
							<label class="text-black">Date: </label>
							<input display="hidden" type="text" class="form-control" name="date_pub_an" disabled value="<?php echo date("m-d-Y"); ?>">
						</div>

						<div class="col-md-12" id="pointure" style="display: none;">
							<label class="text-black">Pointure: </label>
							<input type="text" class="form-control" name="taille" display="blocks">
						</div>



						<div class="col-md-12" id="taille" style="display: none;" style="display: block;">
							<label class="text-black">Taille: </label>
							<select class="form-control" name="taille">
								<option value="S">S</option>
								<option value="XS">XS</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
								<option value="XXL">XXL</option>
								<option value="XXXL">XXXL</option>
								<option value="autre">autre</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div id="images_list"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3">
							<input type="submit" value="Ajouter" class="btn btn-primary py-2 px-4 text-white" id="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>
	function yesnoCheck() {

	}
</script>

<script>
	$(document).ready(function() {

		load_images();

		function load_images() {
			$.ajax({
				url: "fetch_images.php",
				success: function(data) {
					$('#images_list').html(data);
				}
			});
		}

		$('#upload_multiple_images').on('submit', function(event) {
			event.preventDefault();
			var image_name = $('#image').val();
			if (image_name == '') {
				alert("Please Select Image");
				return false;
			} else {
				$.ajax({
					url: "insert.php",
					method: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						$('#image').val('');
						load_images();
					}
				});
			}
		});

	});
</script>