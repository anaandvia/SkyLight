<?php
include 'koneksi.php';
include 'fpdf/fpdf.php';
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"DATA PENGGUNA",0,10,'C');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(2,0.8,'NO',1,0,'C');
$pdf->Cell(2,0.8,'idpengguna',1,0,'C');
$pdf->Cell(5,0.8,'Nama',1,0,'C');
$pdf->Cell(4.3,0.8,'Alamat',1,0,'C');
$pdf->Cell(3.2,0.8,'jk',1,0,'C');
$pdf->Cell(5.3,0.8,'Email',1,0,'C');
$pdf->Cell(2.3,0.8,'Kota',1,0,'C');
$pdf->Cell(3.5,0.8,'Telepon',1,1,'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query = mysqli_query($koneksi,"select * from datapengguna");
while($lihat= mysqli_fetch_array($query)){
    $pdf->Cell(2,0.8,$no,1,0,'C');
    $pdf->Cell(2,0.8,$lihat['idpengguna'],1,0,'C');
    $pdf->Cell(5,0.8,$lihat['Nama'],1,0,'C');
    $pdf->Cell(4.3,0.8,$lihat['Alamat'],1,0,'C');
    $pdf->Cell(3.2,0.8,$lihat['jk'],1,0,'C');
    $pdf->Cell(5.3,0.8,$lihat['Email'],1,0,'C');
    $pdf->Cell(2.3,0.8,$lihat['Kota'],1,0,'C');
    $pdf->Cell(3.5,0.8,$lihat['Telepon'],1,1,'C');
    $no++;
}
$pdf->Output("datapengguna.php","I");
?>