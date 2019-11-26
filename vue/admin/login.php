<div class="login-box">
  <div class="login-logo"> 
    <a href="index2.html"><b>Authentification</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
<span style="<?php if(isset($_GET['error'])) echo "display:block"; else echo "display:none;"?>" class="alert-danger">verfivier vos parametres de connexion!</span>
      <form action="index.php?controller=personne&action=login" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email_pers" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="mdp_pers" class="form-control" placeholder="mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>