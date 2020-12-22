<link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css' />
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css' />
<style>
	.fileBox {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 40px;
		background: #fbfbb8;
		padding: 20px;
		border: 3px solid black;
	}
</style>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12 connectedSortable">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-plus"></i></i>
							Ajouter Annonce
						</h3>
					</div>

					<form id="ff" method="post" action="dashboard.php?controller=annonce&action=add" enctype="multipart/form-data">
						<div class="card-body">

							<div class="row">

								<div class="col-sm-4">
									<div class="form-group">
										<label>Nom annonce</label>
										<input type="text" class="form-control" placeholder="Enter votre nom" name="titre_an" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Prix annonce</label>
										<input type="number" class="form-control" placeholder="prix" name="prix_an" required>

									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label>Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
											</div>
											<input type="text" name="date_pub_an" class="form-control" value="<?php echo date('m-d-Y') ?> " disabled>
										</div>
									</div>
								</div>
							</div>
							<div class="row">


								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Couleur</label>
										<input type="text" class="form-control" name="couleur_an" required>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Region</label>
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
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Marque</label>
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
								</div>
							</div>

							<div class="row">

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Categorie</label>
										<select class="form-control" id="id_categorie" name="id_categorie">
											<?php
											$cat = new categorie("", "");
											$lis = $cat->liste($cnx);
											foreach ($lis as $cat) {
												echo "<option value =" . $cat->id . ">" . $cat->nom_cat . "</option>";
											}
											?>
										</select>
									</div>
								</div>

							
								<?php
								$sous_cat = new souscategorie("", "", $cat->id, '');
								$lis = $sous_cat->liste_byid_cat($cnx);
								?>
								<div class="col-sm-4">
									<div class="form-group">
								
										<label for="exampleInputEmail1">Sous Categorie</label>
										<select class="form-control" id="id_sous_categorie" name="id_sous_categorie">
											<?php
											/*	foreach($lis as $catt){
		echo"<option value =".$catt[0]->id_sous.">".$catt[0]->nom_sous_cat."</option>";
	}*/
	?>
										</select>
									</div>
								</div>


								<div class="col-sm-4">
									<div class="form-group">
										<label>Pointure</label>
										<input type="text" name="taille" class="form-control" placeholder="Enter votre nom" class="form-control" required>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Taille</label>
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

								<div class="col-sm-8">
									<div class="form-group">
										<label for="exampleInputEmail1">Description</label>
										<textarea type="email" class="form-control" name="description_an" required>Votre description ici !
                                        </textarea>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label for="exampleInputEmail1">Photo</label>
										<div class="fileBox">
											<input type="file" class="filepond" name="filepond[]" multiple data-max-file-size="6MB" data-max-files="10" />
										</div>
									</div>
								</div>

								</div>
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
							<div class="card-footer">
							<input type="submit" value="Ajouter" class="btn btn-primary float-right">
						</div>
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
		//bsCustomFileInput.init();
	});
</script>





<script src='https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js'></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src='https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js'></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js'></script>
<script src='https://unpkg.com/filepond/dist/filepond.min.js'></script>
<script>
	// register desired plugins...
	FilePond.registerPlugin(
		// encodes the file as base64 data...
		FilePondPluginFileEncode,
		// validates the size of the file...
		FilePondPluginFileValidateSize,

		// validates the file type...
		FilePondPluginFileValidateType,
		// corrects mobile image orientation...
		FilePondPluginImageExifOrientation,

		// calculates & dds cropping info based on the input image dimensions and the set crop ratio
		FilePondPluginImageCrop,

		//  calculates & adds resize information
		FilePondPluginImageResize,

		// applies the image modifications supplied by the Image crop and Image resize plugins before the image is uploaded
		FilePondPluginImageTransform,
		// previews dropped images...
		FilePondPluginImagePreview
	);
	// Select the file input and use create() to turn it into a pond
	FilePond.create(document.querySelector('.filepond'), {

		allowMultiple: true,
		allowFileEncode: true,
		maxFiles: 10,
		required: true,
		maxParallelUploads: 10,
		instantUpload: false,
		acceptedFileTypes: ['image/*'],
		imageResizeTargetWidth: 50,
		//imageResizeMode: 'contain',
		imageCropAspectRatio: '1:1',
		imageTransformVariants: {

			'v3_200px': transforms => {
				transforms.resize.size.width = 900;
				return transforms;
			}
		},
		imageTransformOutputQuality: 100,
		imageTransformOutputMimeType: 'image/jpeg',

		onaddfile: (err, fileItem) => {
			console.log(err, fileItem.getMetadata('resize'));
		}


	});
</script>

<script>
	$('#id_categorie').change(function() {
		var id_cat = $(this).val();
		alert('http://localhost/FRIPLOCAL_EXAM/admin/controllers/sous_categorie_ajax.controller.php?action=byid&id_cat=' + id_cat);

		$.ajax({
			url: 'http://localhost/FRIPLOCAL_EXAM/admin/controllers/sous_categorie_ajax.controller.php?action=byid&id_cat=' + id_cat,
			type: 'GET',
			// data: {id_cat:id_cat},
			dataType: 'json',
			success: function(response) {
				console.log(response);
				var len = response.length;
				alert(len);
				for (var i = 0; i < len; i++) {
					var id = response[i]['id'];

					var name = response[i]['name'];
					$("#id_sous_categorie").empty();
					$("#id_sous_categorie").append("<option value='" + id + "'>" + name + "</option>");

				}
			}
		});
	});
</script>