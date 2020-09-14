<?php

require('../assets/report/fpdf.php');
require('../inc/koneksi.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Image('css/img/logo.png',10,10,-300);
$pdf->Cell(0,7,'PENGEMBANGAN KAWASAN CEPAT TUMBUH',0,1,'C');
$pdf->Cell(0,7,'BAPPEDA KOTA BANJARBARU',0,1,'C');

$pdf->SetFont('Times','B',11);
$pdf->Cell(0,7,'',0,1,'C');
$pdf->Cell(0,7,'PENDUDUK BERADASARKAN KELOMPOK',0,1,'C');
$pdf->Cell(0,7,'UMUR DAN JENIS KELAMIN TAHUN 2016',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(20,6,'Tahun',1,0,'C');
$pdf->Cell(48,6,'Kelompok Umur',1,0,'C');
$pdf->Cell(30,6,'Laki-Laki',1,0,'C');
$pdf->Cell(30,6,'Perempuan',1,0,'C');
$pdf->Cell(30,6,'Jumlah',1,0,'C');
$pdf->Cell(30,6,'Sex Ratio',1,1,'C');

$pdf->SetFont('Times','',10);
$no=1;
$hasil = mysqli_query($koneksi, "SELECT *FROM tbl_klmpkumur");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(20,6,$no,1,0);
    $pdf->Cell(48,6,$data['kelompok_umur'],1,0);
    $pdf->Cell(30,6,$data['laki_laki'],1,0);
    $pdf->Cell(30,6,$data['perempuan'],1,0);
    $pdf->Cell(30,6,$data['jumlah'],1,0);
    $pdf->Cell(30,6,$data['sex_ratio'],1,1);
    $no++;
}
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','',10);
$pdf->Cell(150,7,'',0,0);
$pdf->Cell(48,7,'Banjarbaru, 8 Januari 2020',0,1);
$pdf->Cell(153,7,'',0,0);
$pdf->Cell(48,7,'Yang Bertanda Tangan',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(156,7,'',0,0);
$pdf->Cell(48,7,'Wahyu Ramadhan',0,1);
$pdf->Cell(157,7,'',0,0);
$pdf->Cell(48,7,'NPM : 16630644',0,1);

$pdf->Output();
?>