<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM datapengguna where idpengguna='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['idpengguna']=$data['idpengguna'];
$row['Nama']=$data['Nama'];
$row['Alamat']=$data['Alamat'];
$row['jk']=$data['jk'];
$row['Email']=$data['Email'];
$row['Kota']=$data['Kota'];
$row['Telepon']=$data['Telepon'];
echo json_encode($row);

?>