<?php
// include database connection file
include 'koneksi.php';
echo $iduser = $_POST['datadel'];
echo $sql = "DELETE FROM akunpengguna WHERE iduser ='$iduser'";
mysqli_query($koneksi,$sql );

header("Location:akun_pengguna.php");

?>