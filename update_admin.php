<?php
// include database connection file
include 'koneksi.php';
$idadmin= $_POST['idadmin'];
$username= $_POST['username'];
$password= $_POST['password'];
$result = mysqli_query($koneksi, "UPDATE admin SET idadmin='$idadmin',username='$username',password='$password' WHERE idadmin ='$idadmin'");
// Redirect to homepage to display updated user in list
header("Location:admin.php");
?>