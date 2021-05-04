<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM slideshow where id='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['id']=$data['Id'];
$row['Foto']=$data['Foto'];


echo json_encode($row);

?>