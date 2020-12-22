<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmpl4Y6-cdI6PuHEgvMyIxA6eC81Zpbnw&libraries=places"></script>
<script>
  var autocomplete;

  function initialize() {
    autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */
      (document.getElementById('autocomplete')), {
        types: ['geocode']
      });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {});
  }
</script>

<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo $non; ?></h3>

        <p>Les Annonces Non Enocre Traitée</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="dashboard.php?controller=annonce&action=listeN" class="small-box-footer">
        Plus d'information <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo $oui; ?></h3>

        <p>Les annonces acceptée</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="dashboard.php?controller=annonce&action=listeO" class="small-box-footer">
        Plus d'information <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo $non_per; ?></h3>

        <p>Utilisateur non enocre traitée </p>
      </div>
      <div class="icon">
        <i class="fas fa-user-slash"></i>
      </div>
      <a href="dashboard.php?controller=personne&action=listeN" class="small-box-footer">
        Plus d'information <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo $oui_per; ?></h3>

        <p>Utilisateur Acceptée</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="dashboard.php?controller=personne&action=listeO" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->



<div class="row">

  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo $ar; ?></h3>

        <p>Les annonces archivées</p>
      </div>
      <div class="icon">
        <i class="far fa-folder-open"></i>
      </div>
      <a href="dashboard.php?controller=annonce&action=listeA" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
</div>


<!-- Small Box (Stat card) -->
<div class="row">

  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <b>Les Annonces Par Régions</b>
      </div>
      <div class="card-body">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js'></script>
        <button class="bg-info" id='line'>Line</button>
        <button class="bg-info" id='bar'>Bar</button>
        <button class="bg-info" id='pie'>Pie</button>
        <button class="bg-info" id='doughnut'>doughnut</button>
        <button class="bg-info" id='polarArea'>polarArea</button>


        <canvas id="canvas"></canvas>

      </div>
      <!-- /.card-body -->
    </div>
  </div>

  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <b>Statistique Par Région</b>
      </div>
    <div class="card-body">
      <div class="d-flex">
        <p class="d-flex flex-column">
          <span class="text-bold text-lg">24: gouvernorat tunisie </span>
        </p>

      </div>
      <label for="locationTextField">Location</label>
      <input id="locationTextField" type="text" size="50">

      <script>
        function init() {
          var input = document.getElementById('locationTextField');
          var autocomplete = new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', init);
      </script>

      <div class="position-relative mb-4">
        <canvas id="visitors-chart" height="200"></canvas>

      </div>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
  var x = 10;
</script>




<?php
$ann = new annonce('', '', '', '', '', '', '', '', '', '', '', '', '');
$x = $ann->count_par_region($cnx);
$json_region = [];
$json_region_count = [];

foreach ($x as $x1) {
  $json_region[] = $x1->c1;
  $json_region_count[] = (int) $x1->c2;
}
//echo json_encode($json_region);
//echo json_encode($json_region_count);

?>

<script>
  var config = {
    type: 'line',
    data: {
      labels: <?php echo json_encode($json_region); ?>,
      datasets: [{
        label: "company1",
        data: <?php echo json_encode($json_region_count); ?>,
        fill: false,
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        backgroundColor: ['rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ]
      }]
    },
    options: {
      responsive: true,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            callback: function(value) {
              if (value % 1 === 0) {
                return value;
              }
            }
          }
        }]
      }
    }
  };

  var myChart;

  $("#line").click(function() {
    change('line');
  });

  $("#bar").click(function() {
    change('bar');
  });

  $("#pie").click(function() {
    change('pie');
  });
  $("#doughnut").click(function() {
    change('doughnut');
  });
  $("#polarArea").click(function() {
    change('polarArea');
  });


  function change(newType) {
    var ctx = document.getElementById("canvas").getContext("2d");

    // Remove the old chart and all its event handles
    if (myChart) {
      myChart.destroy();
    }

    // Chart.js modifies the object you pass in. Pass a copy of the object so we can use the original object later
    var temp = jQuery.extend(true, {}, config);
    temp.type = newType;
    myChart = new Chart(ctx, temp);
  };
</script>

</div>