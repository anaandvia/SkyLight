<?php
// include database connection file
include 'koneksi.php';
echo $idadmin = $_POST['datadel'];
echo $sql = "DELETE FROM admin WHERE idadmin ='$idadmin'";
mysqli_query($koneksi,$sql );

header("Location:admin.php");

?>