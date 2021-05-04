<?php
// include database connection file
include 'koneksi.php';
$idhotel= $_POST['idhotel'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Kontak=$_POST['Kontak'];
$result = mysqli_query($koneksi, "UPDATE datahotel SET idhotel= '$idhotel',Nama='$Nama',Alamat='$Alamat',Kontak='$Kontak' WHERE idhotel='$idhotel'");
// Redirect to homepage to display updated user in list
header("Location: datahotel.php");
?>