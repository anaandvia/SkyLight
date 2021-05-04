<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM kamar where idkamar='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['idkamar']=$data['idkamar'];
$row['idhotel']=$data['idhotel'];
$row['jeniskamar']=$data['jeniskamar'];
$row['harga']=$data['harga'];
$row['Foto']=$data['Foto'];

echo json_encode($row);

?>