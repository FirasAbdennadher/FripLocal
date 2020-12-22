<section class="content">
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-plus"></i></i>
                            Ajout Marque
                        </h3>
                    </div>

                    <form method="post" action="dashboard.php?controller=marque&action=add" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nom marque</label>
                                        <input class="form-control" type="text" name="nom_marq" required>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Ajouter" class="btn btn-primary float-right">
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