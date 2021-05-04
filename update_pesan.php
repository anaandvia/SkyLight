<?php
// include database connection file
include 'koneksi.php';
$idpesan = $_POST['idpesan'];
$idpengguna = $_POST['idpengguna'];
$idkamar = $_POST['idkamar'];
$PilihHotel= $_POST['PilihHotel'];
$CheckIn = $_POST['CheckIn'];
$CheckOut = $_POST['CheckOut'];
$JumlahTamu = $_POST['JumlahTamu'];
$JumlahKamar = $_POST['JumlahKamar'];
$totalharga = $_POST['totalharga'];
$sql = "UPDATE pesan SET PilihHotel='$PilihHotel',CheckIn='$CheckOut',JumlahTamu='$JumlahTamu',JumlahKamar='$JumlahKamar',totalharga = '$totalharga' WHERE idpesan ='$idpesan'";
$result = mysqli_query($koneksi,$sql );
if($result){
    echo "Data Berhasil Disimpan";
        header("location:pesan.php");
}else{
    echo "Gagal Disimpan";
}
?>