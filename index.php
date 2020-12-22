<?php session_start();
include_once "includes/connexion.php";
//initialisation des variables $controller et $action
$controller = "annonce";
$action = "liste";

//Recupération
if (isset($_REQUEST["controller"]))
  $controller = $_REQUEST["controller"];
if (isset($_REQUEST["action"]))
  $action = $_REQUEST["action"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>FRIPELOCAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="ac/fonts/icomoon/style.css">

  <link rel="stylesheet" href="ac/css/bootstrap.min.css">
  <link rel="stylesheet" href="ac/css/magnific-popup.css">
  <link rel="stylesheet" href="ac/css/jquery-ui.css">
  <link rel="stylesheet" href="ac/css/owl.carousel.min.css">
  <link rel="stylesheet" href="ac/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="ac/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="ac/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="ac/css/aos.css">
  <link rel="stylesheet" href="ac/css/rangeslider.css">

  <link rel="stylesheet" href="ac/css/style.css">

</head>
<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar container py-0 bg-white" role="banner">

    <!-- <div class="container"> -->
    <div class="row align-items-center">

      <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="index.php" class="text-black mb-0">Fripe<span class="text-primary">LOCAL</span> </a></h1>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="active"><a href="index.php">Acceuil</a></li>
            <li><a href="index.php?controller=personne&action=contact">Contact</a></li>


            <li><a style="<?php if (isset($_SESSION['id'])) echo "display:block;";
                          else echo "display:none;"; ?>" href="index.php?controller=personne&action=logout"><span class="border-left pl-xl-4"></span>Déconnexion</a></li>


            <li><a style="<?php if (isset($_SESSION['id'])) echo "display:block;";
                          else echo "display:none;"; ?>" href="index.php?controller=annonce&action=liste_ann_pers">Profile</a></li>

            <li class="ml-xl-3 login">
              <a style="<?php if (isset($_SESSION['id'])) echo "display:none;";
                        else echo "display:block;"; ?>" href="index.php?controller=personne&action=login1"><span class="border-left pl-xl-4"></span>Connexion</a>
            </li>


            <li>
              <a style="<?php if (isset($_SESSION['id'])) echo "display:none;";
                        else echo "display:block;"; ?>" href="index.php?controller=personne&action=add1">Inscrivez-vous</a>
            </li>

            <li>
              <a style="<?php if (isset($_SESSION['id'])) echo "display:block;";
                        else echo "display:none;"; ?>" href="index.php?controller=annonce&action=add1" class="cta"><span class="bg-primary text-white rounded">+ Créer une annonce</span></a>
            </li>
          </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
      </div>

    </div>
    <!-- </div> -->

  </header>

  <body>

    <?php include "controllers/$controller.controller.php"; ?>
    <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <h2 class="footer-heading mb-4">About</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
            </div>

            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Navigations</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search products..." aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>
  </body>


  <script src="ac/js/jquery-3.3.1.min.js"></script>
  <script src="ac/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="ac/js/jquery-ui.js"></script>
  <script src="ac/js/popper.min.js"></script>
  <script src="ac/js/bootstrap.min.js"></script>
  <script src="ac/js/owl.carousel.min.js"></script>
  <script src="ac/js/jquery.stellar.min.js"></script>
  <script src="ac/js/jquery.countdown.min.js"></script>
  <script src="ac/js/jquery.magnific-popup.min.js"></script>
  <script src="ac/js/bootstrap-datepicker.min.js"></script>
  <script src="ac/js/aos.js"></script>
  <script src="ac/js/rangeslider.min.js"></script>

  <script src="ac/js/main.js"></script>

</html>