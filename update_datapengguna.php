<?php
// include database connection file
include 'koneksi.php';
$idpengguna= $_POST['idpengguna'];
$Nama= $_POST['Nama'];
$Alamat= $_POST['Alamat'];
$jk= $_POST['jk'];
$Email= $_POST['Email'];
$Kota= $_POST['Kota'];
$Telepon= $_POST['Telepon'];
$result = mysqli_query($koneksi, "UPDATE datapengguna SET idpengguna='$idpengguna',Nama='$Nama',Alamat='$Alamat',jk='$jk',Email='$Email',Kota='$Kota',Telepon='$Telepon' WHERE idpengguna ='$idpengguna'");
// Redirect to homepage to display updated user in list
header("Location:datapengguna.php");
?>