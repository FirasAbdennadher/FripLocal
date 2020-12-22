<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(ac/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">

			<div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


				<div class="row justify-content-center mt-5">
					<div class="col-md-8 text-center">
						<h1>Contact</h1>
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
							<label class="text-black" for="email">Email<i class="text-danger">*</i></label>
							<input type="email" id="text" class="form-control" name="email" required>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="email">Sujet<i class="text-danger">*</i></label>
							<input type="text" class="form-control" name="sujet" required>
						</div>

						<div class="col-md-12">
							<label class="text-black" for="message">Description<i class="text-danger">*</i></label>
                            <textarea name="Description" id="message" cols="30" rows="7" class="form-control" placeholder="Votre description ici ..."></textarea>
                            <p style="font-size: 13px;">Saisissez les détails de votre demande. Un membre de notre équipe d’assistance répondra dans les plus brefs délais.</p>
						</div>

						



					<div class="row">
						<div class="col-md-9">
						</div>
						<div class="col-md-3">
							<input type="submit" value="Envoyer" class="float-right btn btn-primary py-2 px-4 text-white" id="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
