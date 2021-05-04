<?php
// include database connection file
include 'koneksi.php';
echo $idkamar = $_POST['datadel'];
echo $sql = "DELETE FROM kamar WHERE idkamar ='$idkamar'";
mysqli_query($koneksi,$sql );

header("Location:kamar.php");

?>