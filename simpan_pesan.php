<?php 
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
$input = "INSERT INTO pesan VALUES('$idpesan','$idpengguna','$PilihHotel','$CheckIn','$CheckOut','$JumlahTamu','$JumlahKamar','$totalharga')";
$input2 = "INSERT INTO detailpesan VALUES('$idpesan','$idkamar')";
mysqli_query($koneksi,$input);
mysqli_query($koneksi,$input2);
// or die(mysql_error());
if($input && $input2){
    echo "Data Berhasil Disimpan";
        header("location:pesan.php");
}else{
    echo "Gagal Disimpan";
}
?>