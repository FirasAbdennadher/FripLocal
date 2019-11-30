<!DOCTYPE html>
<html lang="en">



<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    

    <div style="padding-top: 10%;" class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5" data-aos="fade">



            <form method="POST" action="index.php?controller=personne&action=login" class="p-5 bg-white">

              <h2 class="text-center">Se Connecter</h1>
              <div class="row form-group">
                <div class="col-md-12">
                  <span style="<?php if (isset($_GET['error'])) echo "display:block";else echo "display:none;" ?>" class="alert-danger text-center">Vérifier vos paramètres de connexion!</span>
                </div>

                <div class="col-md-12">
                  <label class="text-black">Email</label>
                  <input type="email" name="email_pers" id="email_pers" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="text-black">Mot de passe</label>
                  <input type="password" name="mdp_pers" id="mdp_pers" class="form-control" required>
                </div>



              </div>
              <div class="row">
                <div class="col-md-9">
                  <p>Pas encore membre ? <a href="index.php?controller=personne&action=add1">Cliquez ici</a></p>
                </div>

                <div class="col-md-3">
                  <input type="submit" value="Se connecter" class="btn btn-primary py-2 px-4 text-white" id="submit">
                </div>
              </div>



            </form>
          </div>

        </div>
      </div>
    </div>
</body>

</html>