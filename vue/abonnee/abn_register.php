<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>Register</h1>
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
        <form action="index.php?controller=personne&action=add" class="p-5 bg-white">

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Nom</label>
              <input type="text" id="email" class="form-control" name="nom_pers" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="email">Prenom</label>
              <input type="text" id="email" class="form-control" name="prenom_pers" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email_pers" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Mot de passe</label>
              <input type="password" id="password" class="form-control" name="mdp_pers" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Rentrer mot de passe</label>
              <input type="password" id="confirm_password" class="form-control" required>
              <span id='message'></span>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Numéro de téléphone</label>
              <input type="number" id="subject" class="form-control" name="tel_pers" required>
            </div>

          </div>

          <div class="row">
            <div class="col-md-9">
              <p>Déjà membre? <a href="index.php?controller=personne&action=login1">Connexion</a></p>
            </div>
            <div class="col-md-3">
              <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white" id="submit_button" >
            </div>
          </div>
      </div>


      </form>
    </div>

  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  var $password = $("#password"),
    $confirm_password = $("#confirm_password"),
    $statusMessage = $("#message"),
    $submitButton = $('#submit-button');

  function validate() {

    if ($password.val() == $confirm_password.val()) {
      $statusMessage.text("Passwords Match!");
      $submitButton.prop('disabled', false);
    } else {
      $statusMessage.text("Passwords Do Not Match!");
      $submitButton.prop('disabled', true);
    }
  }
</script>