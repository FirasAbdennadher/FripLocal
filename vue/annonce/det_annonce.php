<?php
include "includes/connexion.php";
$id_an = $_GET["id_an"];
$annonce = $cnx->query("select * from annonce where id_an='" . $id_an . "'")->fetch(PDO::FETCH_OBJ);
$marque = $cnx->query("select * from marque where id='" . $annonce->id_marque . "'")->fetch(PDO::FETCH_OBJ);
$categorie = $cnx->query("select * from categorie where id='" . $annonce->id_categorie . "'")->fetch(PDO::FETCH_OBJ);
?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="mb-4">
                    <div class="slide-one-item home-slider owl-carousel">
                        <div><img src="ac/images/img_1.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="ac/images/img_2.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="ac/images/img_3.jpg" alt="Image" class="img-fluid"></div>
                        <div><img src="ac/images/img_4.jpg" alt="Image" class="img-fluid"></div>
                    </div>
                </div>

                <h4 class="h5 mb-4 text-black">Description</h4>
                <p><?php echo $annonce->description_an; ?></p>

            </div>
            <div class="col-lg-3 ml-auto">

                <div class="mb-5">
                    <h3 class="h5 text-black mb-3">filter</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <h3 class="font-weight-bold"><?php echo $annonce->prix_an; ?> DT</h3>
                            <hr>
                        </div>

                        <div class="form-group">
                            <h3><?php echo $annonce->titre_an; ?></h3>
                            <h6>Publié: <?php echo $annonce->date_pub_an; ?></h6>
                            <hr>
                        </div>

                        <div class="form-group">
                            <h6><span class="icon icon-room"></span><?php echo $annonce->region_an; ?>, Tunisie</h6>
                            <hr>
                            <h6>Marque: <?php echo $marque->nom_marq; ?></h6>
                            <h6>Categorie: <?php echo $categorie->nom_cat; ?></h6>
                            <hr>
                        </div>

                    </form>
                </div>




            </div>

        </div>
    </div>
</div>