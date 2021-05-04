<?php
// include database connection file
include 'koneksi.php';
echo $idpesan = $_POST['datadel'];
echo $sql = "DELETE FROM pesan WHERE pesan.idpesan ='$idpesan'";
mysqli_query($koneksi,$sql);

header("Location:pesan.php");

?>