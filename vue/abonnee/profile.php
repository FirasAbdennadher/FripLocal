<div style="padding-top:10%;" class="col-md-12" data-aos="fade" data-aos-delay="100">





  <div class="site-section">
    <div class=" bg-white border">
      <div class="row float-center">

        <div class="col-md-3">
          <p class="font-weight-bold">Nom:</p>
          <p class="mb-4"><?php echo $personne->nom_pers; ?></p>
        </div>

        <div class="col-md-3">
          <p class="font-weight-bold">Prenom:</p>
          <p class="mb-4"><?php echo $personne->prenom_pers; ?></p>
        </div>

        <div class="col-md-3">
          <p class="font-weight-bold">Email:</p>
          <p class="mb-4"><?php echo $personne->email_pers; ?></p>
        </div>

      </div>
      <hr>
      <div class="row">

        <div class="col-md-3">
          <p class="font-weight-bold">Téléphone:</p>
          <p class="mb-4"><?php echo $personne->tel_pers; ?></p>
        </div>

        <div class="col-md-3">
          <p class="font-weight-bold">Status du compte:</p>
          <p class="mb-4 text-uppercase"> <?php echo $personne->status; ?></p>
        </div>

      </div>
    </div>
  </div>
</div>
</div>

<div class="site-section bg-white">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-left border-primary">
        <h2 class="font-weight-light text-primary">Vos annonces :</h2>
      </div>
    </div>
    <div class="row mt-5">
      <?php


      foreach ($annonces as $annonce) {
        $mar = new marque($annonce->id_marque, "");
        $cat = new categorie($annonce->id_categorie, "");
        $marque = $mar->detail($cnx);
        $categ = $cat->detail($cnx);


        ?>
        <div class="col-lg-3">
          <div class="d-block d-md-flex listing vertical">
            <a href="index.php?controller=annonce&action=det&id_an=<?php echo $annonce->id_an; ?>" class="img d-block" style="background-image: url(ac/images/hero_1.jpg);"> </a>
            <div class="lh-content">
              <span class="category"><?php echo $annonce->prix_an; ?> TND</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="listings-single.html"><?php echo $annonce->titre_an; ?></a></h3>

              <address><span class="icon icon-room"></span><?php echo $annonce->region_an; ?>, Tunisie</address>
              <span class="category"><?php echo $annonce->status; ?></span>
            </div>
          </div>
        </div>

      <?php }
      ?>

    </div>
  </div>
  <!-- /.card-body -->
</div>

