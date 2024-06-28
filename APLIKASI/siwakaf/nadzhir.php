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
        <title>Table - Nadzhir Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#tabel-data').DataTable();
            });
        </script>
        <style type="text/css">
        body {
            color: #566787;
            background: #fff;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }
        .table-wrapper {
            background: #fff;
            padding: 10px 25px;
                
        }
        .table-title {
            padding-bottom: 5px;
            background: #fff;
            color: #000;
            
        }
        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }
        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }
        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 60px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }
        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }
        table.table td a:hover {
            color: #2196F3;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }
        table.table td i {
            font-size: 19px;
        }
        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }
        .pagination li.active a, .pagination li.active a.page-link {
            background: #03A9F4;
        }
        .pagination li.active a:hover {
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }
        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }
        .custom-checkbox label:before{
            width: 18px;
            height: 18px;
        }
        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }
        .custom-checkbox input[type="checkbox"]:checked + label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            border-color: #fff;
        }
        .custom-checkbox input[type="checkbox"]:disabled + label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }
        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }
        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
            padding: 20px 30px;
        }
        .modal .modal-content {
            border-radius: 3px;
        }
        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
            display: inline-block;
        }
        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }
        .modal textarea.form-control {
            resize: vertical;
        }
        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }
        .modal form label {
            font-weight: normal;
        }
    </style>
        <script type="text/javascript">
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
        </script>
        
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
                            <div class="sb-sidenav-menu-heading" style="font-size: 11px;">Core</div>
                            <a class="nav-link" href="dashboard.php" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-tachometer-alt" fa-5x></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading" style="font-size: 11px;">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" style="font-size: 16px;">
                                <div class="sb-nav-link-icon" style="font-size: 12px;"><i class="fas fa-columns" fa-5x></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion" style="font-size: 15px;">
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
                        <h1 class="mt-4">Nadzhir</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Nadzhir</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Nadzhir di Kecamatan X
                            </div>
                        </div>
                    </div>
                    <?php
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                        $id_nadzhir = $_POST['id_nadzhir'];
                        $nadzhir = $_POST['nadzhir'];
                        $nik = $_POST['nik'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $tpt_lahir = $_POST['tpt_lahir'];
                        $agama = $_POST['agama'];
                        $pekerjaan = $_POST['pekerjaan'];
                        $alamat = $_POST['alamat'];
                    if(isset($_POST['tambah']))
                    {
                        //tambah
                        $sql = "INSERT INTO nadzhir VALUES ('','$nadzhir', '$nik' , '$jenis_kelamin', '$tgl_lahir', '$tpt_lahir', '$agama', '$pekerjaan', '$alamat')";
                        if(mysqli_query($koneksi, $sql))
                        {
                            $nilaihasil = "Records inserted successfully.";
                        } 
                        else
                        {
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
                        }
                        

                    }
                    if(isset($_POST['edit']))
                    {
                        //edit
                        $sql = "UPDATE nadzhir SET nadzhir = '$nadzhir', nik = '$nik' , jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir', tpt_lahir = '$tpt_lahir', agama = '$agama', pekerjaan = '$pekerjaan', alamat = '$alamat' WHERE id_nadzhir = '$id_nadzhir'";
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
                        $sql = "DELETE FROM nadzhir WHERE id_nadzhir = '$id_nadzhir'";
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
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4><b>Data nadzhir</b></h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">New Record</a>
                                        </div>
                                    </div>
                                </div>
                                <?php echo "$nilaihasil"; ?>
                                <table id="tabel-data" class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nadzhir</th>
                                            <th>NIK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Agama</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $ksql="SELECT * FROM nadzhir";
                                    $khasil = mysqli_query($koneksi,$ksql);
                                    while($krow = mysqli_fetch_array($khasil))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $krow['nadzhir']; ?></td>
                                            <td><?php echo $krow['nik']; ?></td>
                                            <td><?php echo $krow['jenis_kelamin']; ?></td>
                                            <td><?php echo $krow['tgl_lahir']; ?></td>
                                            <td><?php echo $krow['tpt_lahir']; ?></td>
                                            <td><?php echo $krow['agama']; ?></td>
                                            <td><?php echo $krow['pekerjaan']; ?></td>
                                            <td><?php echo $krow['alamat']; ?></td>
                                            <td>
                                                <a href="#editEmployeeModal<?php echo $krow['id_nadzhir']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="#deleteEmployeeModal<?php echo $krow['id_nadzhir']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal<?php echo $krow['id_nadzhir']; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form method="post" action="">
                                    <input type="hidden" class="form-control" value="<?php echo $krow['id_nadzhir']; ?>" name="id_nadzhir" required>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nadzhir</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['nadzhir']; ?>" name="nadzhir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['nik']; ?>" name="nik" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['jenis_kelamin']; ?>" name="jenis_kelamin" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" value="<?php echo $krow['tgl_lahir']; ?>" name="tgl_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['tpt_lahir']; ?>" name="tpt_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['agama']; ?>" name="agama" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['pekerjaan']; ?>" name="pekerjaan" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" value="<?php echo $krow['alamat']; ?>" name="alamat" required>
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
                        <div id="deleteEmployeeModal<?php echo $krow['id_nadzhir']; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form method="post" action="">
                                    <input type="hidden" class="form-control" value="<?php echo $krow['id_nadzhir']; ?>" name="id_nadzhir" required>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete these Records <?php echo $krow['nadzhir']; ?>?</p>
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
                    <!-- Add Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nadzhir</label>
                                                <input type="text" class="form-control" name ="nadzhir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" class="form-control" name ="nik" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" name ="jenis_kelamin" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tpt_lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="text" class="form-control" name="agama" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" class="form-control" name="pekerjaan" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="alamat" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-success" value="Add" name="tambah">
                                        </div>
                                    </form>
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
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
