<?php
// include database connection file
include 'koneksi.php';
$iduser= $_POST['iduser'];
$idpengguna= $_POST['idpengguna'];
$username= $_POST['username'];
$password= $_POST['password'];
$result = mysqli_query($koneksi, "UPDATE akunpengguna SET iduser='$iduser',idpengguna='$idpengguna',username='$username', password='$password' WHERE iduser ='$iduser'");
// Redirect to homepage to display updated user in list
header("Location:akun_pengguna.php");
?>