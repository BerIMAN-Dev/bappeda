<?php

require('../assets/report/fpdf.php');
require('../inc/koneksi.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Image('css/img/logo.png',10,10,-300);
$pdf->Cell(0,7,'PENGEMBANGAN KAWASAN CEPAT TUMBUH',0,1,'C');
$pdf->Cell(0,7,'BAPPEDA KOTA BANJARBARU',0,1,'C');

$pdf->SetFont('Times','B',12);
$pdf->Cell(0,7,'',0,1,'C');
$pdf->Cell(0,7,'KAWASAN PERTUMBUHAN Tinggi',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',10);

$pdf->Cell(50,6,'Kawasan',1,0,'C');
$pdf->Cell(23,6,'Nilai (30)',1,0,'C');
$pdf->Cell(23,6,'Nilai (25)',1,0,'C');
$pdf->Cell(23,6,'Nilai (15)',1,0,'C');
$pdf->Cell(23,6,'Nilai (20)',1,0,'C');
$pdf->Cell(23,6,'Nilai (10)',1,0,'C');
$pdf->Cell(23,6,'Hasil',1,1,'C');

$pdf->SetFont('Times','',10);
$no=1;

$hasil = mysqli_query($koneksi, "SELECT *FROM tbl_rekap
                INNER JOIN tbl_kawasan ON tbl_rekap.kd_kawasan = tbl_kawasan.kd_kawasan where hasil='Tinggi'");
while ($data = mysqli_fetch_array($hasil)){
    $pdf->Cell(50,6,$data['kawasan'],1,0);
    $pdf->Cell(23,6,$data['n1'],1,0);
    $pdf->Cell(23,6,$data['n2'],1,0);
    $pdf->Cell(23,6,$data['n3'],1,0);
    $pdf->Cell(23,6,$data['n4'],1,0);
    $pdf->Cell(23,6,$data['n5'],1,0);
    $pdf->Cell(23,6,$data['total'],1,1);
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