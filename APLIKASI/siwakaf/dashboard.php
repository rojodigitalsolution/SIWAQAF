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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/png" href="img/Kementerian_Agama_new_logo.png">
        <title>Dashboard - Wakaf Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="js/Chart.js"></script>
        <style type="text/css"></style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Admin SIWakaf</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 21px;"><i class="fas fa-user fa-fw" fa-5x></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profil_admin.php">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="profil_admin.php">Profil Admin</a>
                                    <a class="nav-link" href="register.php">Tambah Admin</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-book-open" fa-5x></i></div>
                                Data-data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="wakaf.php" style="font-size: 15px;">
                                    <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                    Data Wakaf
                                </a>
                                <a class="nav-link" href="kelurahan.php" style="font-size: 15px;">
                                    <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                    Data Kelurahan
                                </a>
                                <a class="nav-link" href="wakif.php" style="font-size: 15px;">
                                    <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                    Data Wakif
                                </a>
                                <a class="nav-link" href="nadzhir.php" style="font-size: 15px;">
                                    <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                    Data Nadzhir
                                </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="font-size: 11px;">Laporan</div>
                            <a class="nav-link" href="lapwakaf.php" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                Laporan Wakaf
                            </a>
                            <a class="nav-link" href="lapwakif.php" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                Laporan Wakif
                            </a>
                            <a class="nav-link" href="lapnazhir.php" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-table" fa-5x></i></div>
                                Laporan Nadzhir
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin Wakaf
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Grafik Wakaf di Kecamatan X
                                    </div>
                                    <div class="card-body"><canvas id="BarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Wakaf di Kecamatan X
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
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
                                              while ($data = mysqli_fetch_assoc($query)) 
                                              {
                                              ?>
                                                <tr>
                                                  <td><?php echo $data['kelurahan']; ?></td>         
                                                  <td><?php echo $data['luas']; ?></td>
                                                  <td><?php echo $data['penggunaan']; ?></td>
                                                  <td><?php echo $data['wakif']; ?></td>
                                                  <td><?php echo $data['nadzhir']; ?></td>
                                                  <td><?php echo $data['no_sertifikat']; ?></td>
                                                  <td><?php echo $data['tgl_sertifikat']; ?></td>
                                                  <td><?php echo $data['no_aiw']; ?></td>
                                                </tr>
                                              <?php               
                                              }
                                              ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIWAKAF 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
<script  type="text/javascript">
  var ctx = document.getElementById("BarChart").getContext("2d");
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
