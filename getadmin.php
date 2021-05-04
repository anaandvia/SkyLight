<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM admin where idadmin='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['idadmin']=$data['idadmin'];
$row['username']=$data['username'];
$row['password']=$data['password'];


echo json_encode($row);

?>