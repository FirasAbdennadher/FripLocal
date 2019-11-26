  <div class="site-blocks-cover overlay" style="background-image: url(ac/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">


          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up">les meilleure annonce en TUNISIE</h1>
              <p data-aos="fade-up" data-aos-delay="100">Vous pouvez acheter, vendre tout ce que vous voulez.</p>
            </div>
          </div>
          
          <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
            <form method="post">
              <div class="row align-items-center">
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                  <input type="text" class="form-control rounded" placeholder="Que cherchez-vous?">
                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control rounded" placeholder="Emplacement">
                  </div>

                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div class="select-wrap">
                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                    <select class="form-control rounded" name="" id="">
                      <option value="">Toutes les catégories</option>
                      <option value="">Real Estate</option>
                      <option value="">Books &amp; Magazines</option>
                      <option value="">Furniture</option>
                      <option value="">Electronics</option>
                      <option value="">Cars &amp; Vehicles</option>
                      <option value="">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                  <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">

      <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-house"></span></span>
              <span class="caption mb-2 d-block">Real Estate</span>
              <span class="number">3,921</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-books"></span></span>
              <span class="caption mb-2 d-block">Books &amp; Magazines</span>
              <span class="number">398</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-bunk-bed"></span></span>
              <span class="caption mb-2 d-block">Furniture</span>
              <span class="number">1,229</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-innovation"></span></span>
              <span class="caption mb-2 d-block">Electronics</span>
              <span class="number">32,891</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-car"></span></span>
              <span class="caption mb-2 d-block">Cars &amp; Vehicles</span>
              <span class="number">29,221</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-pizza"></span></span>
              <span class="caption mb-2 d-block">Other</span>
              <span class="number">219</span>
            </a>
          </div>
        </div>
      </div>



    </div>
  </div>




  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7 text-left border-primary">
          <h2 class="font-weight-light text-primary">Trending Today</h2>
        </div>
      </div>
      <div class="row mt-5">
        <?php


        foreach ($annonces as $annonce) {
          $mar = new marque($annonce->id_marque, "");
          $cat = new categorie($annonce->id_categorie, "");
          $marque = $mar->detail($cnx);
          $categ = $cat->detail($cnx);





          echo '
     


      <div class="col-lg-3">
        <div class="d-block d-md-flex listing vertical">
            <a href="listings-single.html" class="img d-block" style="background-image: url("ac/images/img_3.jpg")"></a>
            <div class="lh-content">
              <span class="category">Furniture</span>
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="listings-single.html">' . $annonce->titre_an . '</a></h3>
              <address>' . $annonce->region_an . '</address>
            </div>
          </div>
      </div>





';
        }


        ?>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->