<?php

//fetch.php

$koneksi = new PDO("mysql:host=localhost;dbname=sigwakaf", "root", "");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
$column = array('kelurahan', 'luas', 'penggunaan', 'wakif', 'nadzhir', 'no_sertifikat', 'tgl_sertifikat','no_aiw');
$query = "SELECT * FROM wakaf ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE kelurahan LIKE "%'.$_POST['search']['value'].'%" 
 OR luas LIKE "%'.$_POST['search']['value'].'%" 
 OR penggunaan LIKE "%'.$_POST['search']['value'].'%" 
 OR wakif LIKE "%'.$_POST['search']['value'].'%" 
 OR nadzhir LIKE "%'.$_POST['search']['value'].'%" 
 OR no_sertifikat LIKE "%'.$_POST['search']['value'].'%"
 OR tgl_sertifikat LIKE "%'.$_POST['search']['value'].'%"
 OR no_aiw LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_wakaf DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $koneksi->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $koneksi->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['kelurahan'];
 $sub_array[] = $row['luas'];
 $sub_array[] = $row['penggunaan'];
 $sub_array[] = $row['wakif'];
 $sub_array[] = $row['nadzhir'];
 $sub_array[] = $row['no_sertifikat'];
 $sub_array[] = $row['tgl_sertifikat'];
 $sub_array[] = $row['no_aiw'];

 $data[] = $sub_array;
}

function count_all_data($koneksi)
{
 $query = "SELECT * FROM wakaf";
 $statement = $koneksi->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($koneksi),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
