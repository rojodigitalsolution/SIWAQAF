<?php

require('fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Daftar Tanah Wakaf KUA Kecamatan X',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(25,6,'Kelurahan',1,0,'C');
$pdf->Cell(25,6,'Luas (m2)',1,0,'C');
$pdf->Cell(28,6,'Penggunaan',1,0,'C');
$pdf->Cell(20,6,'Wakif',1,0,'C');
$pdf->Cell(20,6,'Nadzhir',1,0,'C');
$pdf->Cell(28,6,'No Sertifikat',1,0,'C');
$pdf->Cell(28,6,'Tgl Sertifikat',1,0,'C');
$pdf->Cell(18,6,'No AIW',1,1,'C');
$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="localhost";
$user="root";
$password="";
$db="sigwakaf";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;

$hasil = mysqli_query($kon, "select * from wakaf order by id_wakaf asc");
while ($data = mysqli_fetch_array($hasil)){

    $pdf->Cell(8,6,$no,1,0,'C');
    $pdf->Cell(25,6,$data['kelurahan'],1,0,'C');
    $pdf->Cell(25,6,$data['luas'],1,0,'C');
    $pdf->Cell(28,6,$data['penggunaan'],1,0,'C');
    $pdf->Cell(20,6,$data['wakif'],1,0,'C');
    $pdf->Cell(20,6,$data['nadzhir'],1,0,'C');
    $pdf->Cell(28,6,$data['no_sertifikat'],1,0,'C');
    $pdf->Cell(28,6,$data['tgl_sertifikat'],1,0,'C');
    $pdf->Cell(18,6,$data['no_aiw'],1,1,'C');
    $no++;
}

$pdf->Output();
?>