<!--<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(ac/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
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
!-->
<div style="padding-top: 10%;" class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 mb-5" data-aos="fade">
        <form method="POST" action="index.php?controller=personne&action=add" class="p-5 bg-white" onSubmit="return checkPassword(this)">

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Nom</label>
              <input type="text" name="nom_pers" id="nom_pers" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="email">Prenom</label>
              <input type="text" name="prenom_pers" id="prenom_pers" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label>
              <input type="email" name="email_pers" id="email_pers" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Mot de passe</label>
              <input type="password" name="mdp_pers" id="password1" class="form-control" required>
              <span id='messageValid' style="color:red"></span>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Rentrer mot de passe</label>
              <input type="password" id="password2" class="form-control" required>
              <span id='message' style="color:red"></span>
            </div>

            <div class="col-md-12">
              <label class="text-black" for="subject">Numéro de téléphone</label>
              <input type="number" name="tel_pers" id="tel_pers" class="form-control" required>
            </div>

          </div>

          <div class="row">
            <div class="col-md-9">
              <p>Déjà membre? <a href="index.php?controller=personne&action=login1">Connexion</a></p>
            </div>
            <div class="col-md-3">
              <input type="submit" value="S'inscrire" class="btn btn-primary py-2 px-4 text-white" id="submit">
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>

<script>
  function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password2.value;
    var regex = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{7,}$/;
    var pass_form = "Utilisez au moins huit caractères comprenant un mélange de lettres, de chiffres et de symboles";
    var pass_verif = "Les mots de passe ne correspondent pas. Veuillez réessayer!!";

    if (password1 != password2) {
      form.password1.focus();
      document.getElementById("message").innerHTML = pass_verif;
      return false;
    } else if (!regex.test(form.password1.value)) {
      form.password1.focus();
      document.getElementById("message").innerHTML = pass_form;
      return false;
    } else {
      alert("Merci pour votre inscription ! Bienvenue sur FRIPLOCAL!");
      return true;
    }
  }
</script>