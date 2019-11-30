<?php
$id_an=$_GET["id_an"];
$annonce = $cnx->query("select * from annonce where id_an='" . id_an . "'")->fetch(PDO::FETCH_OBJ);
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
                <p><?php echo $annonce['description_an'];?></p>

            </div>
            <div class="col-lg-3 ml-auto">

                <div class="mb-5">
                    <h3 class="h5 text-black mb-3">filter</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="What are you looking for?" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="select-wrap">
                                <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                <select class="form-control" name="" id="">
                                    <option value="">All Categories</option>
                                    <option value="" selected="">Real Estate</option>
                                    <option value="">Books &amp; Magazines</option>
                                    <option value="">Furniture</option>
                                    <option value="">Electronics</option>
                                    <option value="">Cars &amp; Vehicles</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- select-wrap, .wrap-icon -->
                            <div class="wrap-icon">
                                <span class="icon icon-room"></span>
                                <input type="text" placeholder="Location" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <p>Radius around selected destination</p>
                        </div>
                        <div class="form-group">
                            <input type="range" min="0" max="100" value="20" data-rangeslider>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <p>Category 'Real Estate' is selected</p>
                            <p>More filters</p>
                        </div>
                        <div class="form-group">
                            <ul class="list-unstyled">
                                <li>
                                    <label for="option1">
                                        <input type="checkbox" id="option1">
                                        Residential
                                    </label>
                                </li>
                                <li>
                                    <label for="option2">
                                        <input type="checkbox" id="option2">
                                        Commercial
                                    </label>
                                </li>
                                <li>
                                    <label for="option3">
                                        <input type="checkbox" id="option3">
                                        Industrial
                                    </label>
                                </li>
                                <li>
                                    <label for="option4">
                                        <input type="checkbox" id="option4">
                                        Land
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>