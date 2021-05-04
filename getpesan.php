<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql ="SELECT pesan.idpesan,pesan.idpengguna, detailpesan.idkamar,pesan.PilihHotel,pesan.CheckIn,pesan.CheckOut,pesan.JumlahTamu,pesan.JumlahKamar,pesan.totalharga FROM detailpesan, pesan WHERE detailpesan.idpesan= pesan.idpesan = '$id' ";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);
$row['idpesan']=$data['idpesan'];
$row['idpengguna']=$data['idpengguna'];
$row['idkamar']=$data['idkamar'];
$row['PilihHotel']=$data['PilihHotel'];
$row['CheckIn']=$data['CheckIn'];
$row['CheckOut']=$data['CheckOut'];
$row['JumlahTamu']=$data['JumlahTamu'];
$row['JumlahKamar']=$data['JumlahKamar'];
$row['totalharga']=$data['totalharga'];
echo json_encode($row);

?>