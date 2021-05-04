<?php
// include database connection file
include 'koneksi.php';
echo $idpengguna = $_POST['datadel'];
echo $sql = "DELETE FROM datapengguna WHERE idpengguna ='$idpengguna'";
mysqli_query($koneksi,$sql );

header("Location:datapengguna.php");

?>