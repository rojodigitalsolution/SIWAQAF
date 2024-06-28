<?php 
$koneksi = mysqli_connect("localhost","root","","sigwakaf");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

  <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:13px;
      padding-left:10px;
      padding-right:10px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#2ABA2C;
      border-top:0px black solid;
      border-bottom:0px black solid;
      text-align:center; }
   table td {
      padding:10px;
      border-top:0px black solid;
      border-bottom:0px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #CCFCBB; }
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
        <h2 class="section-heading" style="font-size:30px">Daftar Tanah Wakaf KUA Kecamatan X</h2>
          <div style="font-size: 16px">
  <br>
  <br>

      <table id="table-wakaf">
        <thead>
          <tr>
            <th>No</th>
            <th>Kelurahan</th>
            <th>Luas (m2)</th>
            <th>Penggunaan</th>
            <th>Wakif</th>
            <th>Nadzhir</th>
            <th>Nomor Sertifikat</th>
            <th>Tanggal Sertifikat</th>
            <th>Nomor AIW</th>
          </tr>
        </thead>  
        <tbody>
          <?php 
          $query = mysqli_query($koneksi,"select * from wakaf");
          $no = 1;
          while($krow = mysqli_fetch_array($query))
          {
          ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $krow['kelurahan']; ?></td>         
              <td><?php echo $krow['luas']; ?></td>
              <td><?php echo $krow['penggunaan']; ?></td>
              <td><?php echo $krow['wakif']; ?></td>
              <td><?php echo $krow['nadzhir']; ?></td>
              <td><?php echo $krow['no_sertifikat']; ?></td>
              <td><?php echo $krow['tgl_sertifikat']; ?></td>
              <td><?php echo $krow['no_aiw']; ?></td>
            </tr>
          <?php               
          }
          ?>
        </tbody>
  </table>
      </div>
    </div>
  </div> </div>

  <a href="pdf.php" style="font-family:optima;">
    <button type="button" class="btn btn-outline-success" style="margin: 15px 70px 20px 1100px" style="font-size: 12px">Unduh</button>
  </a>
  <br>

  <!-- Footer -->
  <footer>
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
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#table-wakaf').DataTable();
  } );
  </script>
</html>
