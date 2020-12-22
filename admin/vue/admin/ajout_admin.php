<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-user-plus"></i></i>
                            Formulaire d'inscription
                        </h3>
                    </div>

                    <form method="post" action="dashboard.php?controller=personne&action=add" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" placeholder="Enter votre nom" name="nom_pers" required>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" class="form-control" placeholder="Enter votre prenom" name="prenom_pers" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter votre email" name="email_pers" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">



                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Numéro De Téléphone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" name="tel_pers" class="form-control" data-inputmask='"mask": "99-999-999"' data-mask required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mot de passe</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="********" name="mdp_pers" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Rentrer mot de passe</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="********" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Inscription" class="btn btn-primary float-right">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>