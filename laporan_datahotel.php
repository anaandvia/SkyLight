<?php
include 'koneksi.php';
include 'fpdf/fpdf.php';
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"DATA HOTEL",0,10,'C');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(2,0.8,'NO',1,0,'C');
$pdf->Cell(2,0.8,'idhotel',1,0,'C');
$pdf->Cell(5,0.8,'Nama',1,0,'C');
$pdf->Cell(13.5,0.8,'Alamat',1,0,'C');
$pdf->Cell(5.5,0.8,'Kontak',1,1,'C');
$pdf->SetFont('Arial','',9);
$no=1;
$query = mysqli_query($koneksi,"select * from datahotel");
while($lihat= mysqli_fetch_array($query)){
    $pdf->Cell(2,0.8,$no,1,0,'C');
    $pdf->Cell(2,0.8,$lihat['idhotel'],1,0,'C');
    $pdf->Cell(5,0.8,$lihat['Nama'],1,0,'C');
    $pdf->Cell(13.5,0.8,$lihat['Alamat'],1,0,'C');
    $pdf->Cell(5.5,0.8,$lihat['Kontak'],1,1,'C');
    $no++;
}
$pdf->Output("datahotel.php","I");
?>