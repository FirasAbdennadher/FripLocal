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

						<div class="col-md-6">
							<label class="text-black" for="email">Titre: </label>
							<input type="text" id="text" class="form-control" name="titre_an" required>
						</div>

						<div class="col-md-6">
							<label class="text-black" for="email">Prix: </label>
							<input type="number_format" class="form-control" name="prix_an" required>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="message">Description:</label>
							<textarea name="description_an" id="message" cols="30" rows="7" class="form-control" placeholder="Votre description ici ..."></textarea>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="email">Region: </label>
							<select class="form-control" name="region_an">
								<option value="none">Nothing</option>
								<option value="guava">Guava</option>
								<option value="lychee">Lychee</option>
								<option value="papaya">Papaya</option>
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

						<div class="col-md-12" style="display: block;">
							<label class="text-black" for="email">Pointure: </label>
							<input type="text" id="text" class="form-control" name="taille">
						</div>

						<div class="col-md-12" style="display: block;">
							<label class="text-black" for="email">Taille: </label>
							<select class="form-control" name="region_an">
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

						<div class="col-md-12">
							<label class="">Photos: </label>
							<input class="form-control" type="image" id="text" alt="Submit" name="photos[]" multiple="multiple" onchange="readURL(this);">
							<div class="gallery" width="180"></div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
	function readURL(input) {
		if ($('#image')[0].files.length > 10) {
			alert('choisir maximume 10 images');

			0
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