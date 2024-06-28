<html>
 <head>
  <link rel="icon" type="image/png" href="img/Kementerian_Agama_new_logo.png">
  <title>Laporan Data Wakaf KUA Kecamatan X</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br>
    <div class="container">
      <a href="dashboard.php" style="font-family:optima;"> <img src="img/268px-Kementerian_Agama_new_logo.png"  style="float:left; margin:0 8px 0px 0;" width="25" height="25"><div style="font-size: 20px">KUA Kecamatan X</div></a>
</div>
  <div class="container box">
   <h3 align="center">Laporan Data Wakaf KUA Kecamatan X</h3>
   <br>
   <br>
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
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
    </table>
   </div>
  </div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript"> 
    $(document).ready(function () {
        $('#customer_data').DataTable({
             "processing" : true,
             "serverSide" : true,
             "ajax" : {
              url:"fetch.php",
              type:"POST"
             },
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>