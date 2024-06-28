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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/png" href="img/Kementerian_Agama_new_logo.png">
        <link rel="icon" type="image/png" href="img/Kementerian_Agama_new_logo.png">
        <title>SIGWakaf - Profil Admin</title>
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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
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
                        <h1 class="mt-4">Profil Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profil Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Admin Wakaf KUA Kecamatan X
                            </div>
                        </div>
                    </div>
                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                        $id_login = $_POST['id_login'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $nama_user = $_POST['nama_user'];
                        $email = $_POST['email'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                    if(isset($_POST['edit']))
                    {
                        //edit
                        $sql = "UPDATE login SET username = '$username', password = '$password' , nama_user = '$nama_user', email = '$email', jenis_kelamin = '$jenis_kelamin' WHERE id_login = '$id_login'";
                        if(mysqli_query($koneksi, $sql))
                        {
                            $nilaihasil = "Records updated successfully.";
                        } 
                        else
                        {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
                        }
                    }
                    if(isset($_POST['delete']))
                    {
                        //delete
                        $sql = "DELETE FROM login WHERE id_login = '$id_login'";
                        if(mysqli_query($koneksi, $sql))
                        {
                            $nilaihasil = "Records deleted successfully.";
                        } 
                        else
                        {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
                        }
                    }
                    ?>
                    <form method="post" action="">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <?php echo "$nilaihasil"; ?>
                                        <table id="tabel-data" class="table table-striped table-hover">
                                          <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama User</th>
                                                <th>Email</th>
                                                <th>Gender</th>                     
                                              </tr>
                                            </thead>  
                                            <tbody>
                                            <?php
                                            $no = 1;
                                            $ksql="SELECT * FROM login";
                                            $khasil = mysqli_query($koneksi,$ksql);
                                            while($krow = mysqli_fetch_array($khasil))
                                            {
                                            ?>
                                                <tr>
                                                  <td><?php echo $no++; ?></td>
                                                  <td><?php echo $krow['username']; ?></td>         
                                                  <td><?php echo md5(md5($krow['password']) + $i); ?></td>
                                                  <td><?php echo $krow['nama_user']; ?></td>
                                                  <td><?php echo $krow['email']; ?></td>
                                                  <td><?php echo $krow['jenis_kelamin']; ?></td>
                                            <td>
                                                <a href="#editEmployeeModal<?php echo $krow['id_login']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="#deleteEmployeeModal<?php echo $krow['id_login']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                                </tr>
                       <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal<?php echo $krow['id_login']; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form method="post" action="">
                                    <input type="hidden" class="form-control" value="<?php echo $krow['id_login']; ?>" name="id_login" required>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['username']; ?>" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" value="<?php echo $krow['password']; ?>" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama User</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['nama_user']; ?>" name="nama_user" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['email']; ?>" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['jenis_kelamin']; ?>" name="jenis_kelamin" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-info" value="Save" name="edit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal<?php echo $krow['id_login']; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form method="post" action="">
                                    <input type="hidden" class="form-control" value="<?php echo $krow['id_login']; ?>" name="id_login" required>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete these Records <?php echo $krow['username']; ?>?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete" name="delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                        // Close connection
                        mysqli_close($koneksi);
                    ?>
                    </form>
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
