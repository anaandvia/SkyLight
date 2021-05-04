<?php
// include database connection file
include 'koneksi.php';
echo $id = $_POST['datadel'];
echo $sql = "DELETE FROM slideshow WHERE id ='$id'";
mysqli_query($koneksi,$sql );

header("Location:slideshow.php");

?>