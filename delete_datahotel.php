<?php
// include database connection file
include 'koneksi.php';
$idhotel = $_POST['datadel'];
$sql = "DELETE FROM datahotel WHERE idhotel ='$idhotel'";
mysqli_query($koneksi,$sql );

header("Location:datahotel.php");

?>