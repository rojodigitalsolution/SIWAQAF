<?php
$koneksi = mysqli_connect("localhost","root","","sigwakaf");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}

$Luas  = mysqli_query($koneksi, "SELECT luas FROM wakaf order by id_wakaf asc");
$Kelurahan  = mysqli_query($koneksi, "SELECT kelurahan FROM wakaf order by id_wakaf asc");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" href="img/Kementerian_Agama_new_logo.png">
  <title>KUA Kecamatan X</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
    <script src="js/Chart.js"></script>
    <style type="text/css">
    </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-family:optima;"> <img class="img-fluid" src="img/268px-Kementerian_Agama_new_logo.png"  style="float:left; margin:0 8px 4px 0;" width="30" height="30">KUA Kecamatan X</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="font-family:optima;">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="font-family:optima;">Data Wakaf</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="grafik.php" style="font-family:optima;">Grafik Wakaf</a>
              <a class="dropdown-item" href="tabel.php" style="font-family:optima;">Tabel Wakaf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php" style="font-family:optima;">Tentang Wakaf</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php" style="font-family:optima;">Profil KUA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" style="font-family:optima;">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/119436-green-and-yellow-abstract-background-illustration.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-15 col-md-12 mx-auto">
          <div class="page-heading">
            <h1 style="font-size:5vw"> <h1 style="font-family:perpetua;">Data Wakaf</h1>
            <span class="subheading"></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-15 col-md-12 mx-auto">
        <ul class="list-inline text-center">
        <h2 class="section-heading" style="font-size:30px">Jumlah dan Luas Tanah Wakaf Kecamatan X</h2>
      </div>
    </div>
  </div>

  <br>
  <br>

  <canvas id="barchart" width="70" height="20"></canvas>

 <br>

  <!-- Footer -->
  <footer>
  <hr>
  <hr>
  <hr>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <img class="img-fluid" src="img/268px-Kementerian_Agama_new_logo.png" width="70" height="70">
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; SIWAKAF 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>

<script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($Kelurahan)) { echo '"' . $p['kelurahan'] . '",';}?>],
            datasets: [
            {
              label: "wakaf",
              data: [<?php while ($p = mysqli_fetch_array($Luas)) { echo '"' . $p['luas'] . '",';}?>],
              backgroundColor: [
                '#70AD47',
                '#5B9BD5',
                '#FFC000',
                '#43682B',
                '#255E91'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>
