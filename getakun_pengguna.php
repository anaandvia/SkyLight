<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM akunpengguna where iduser='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['iduser']=$data['iduser'];
$row['idpengguna']=$data['idpengguna'];
$row['username']=$data['username'];
$row['password']=$data['password'];

echo json_encode($row);

?>