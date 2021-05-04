<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM datahotel where idhotel='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['idhotel']=$data['idhotel'];
$row['Nama']=$data['Nama'];
$row['Alamat']=$data['Alamat'];
$row['Kontak']=$data['Kontak'];

echo json_encode($row);

?>