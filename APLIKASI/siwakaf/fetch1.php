<?php

//fetch.php

$koneksi = new PDO("mysql:host=localhost;dbname=sigwakaf", "root", "");
 
// Check connection
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
$column = array('wakif', 'jenis_kelamin', 'tgl_lahir', 'tpt_lahir', 'agama', 'pekerjaan', 'alamat');

$query = "SELECT * FROM wakif ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE wakif LIKE "%'.$_POST['search']['value'].'%" 
 OR jenis_kelamin LIKE "%'.$_POST['search']['value'].'%" 
 OR tgl_lahir LIKE "%'.$_POST['search']['value'].'%" 
 OR tpt_lahir LIKE "%'.$_POST['search']['value'].'%" 
 OR agama LIKE "%'.$_POST['search']['value'].'%" 
 OR pekerjaan LIKE "%'.$_POST['search']['value'].'%"
 OR alamat LIKE "%'.$_POST['search']['value'].'%"
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_wakif DESC ';
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
 $sub_array[] = $row['wakif'];
 $sub_array[] = $row['nik'];
 $sub_array[] = $row['jenis_kelamin'];
 $sub_array[] = $row['tgl_lahir'];
 $sub_array[] = $row['tpt_lahir'];
 $sub_array[] = $row['agama'];
 $sub_array[] = $row['pekerjaan'];
 $sub_array[] = $row['alamat'];

 $data[] = $sub_array;
}

function count_all_data($koneksi)
{
 $query = "SELECT * FROM wakif";
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
