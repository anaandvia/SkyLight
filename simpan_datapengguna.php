<?php 
include 'koneksi.php';
$idpengguna = $_POST['idpengguna'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$jk = $_POST['jk'];
$Email = $_POST['Email'];
$Kota = $_POST['Kota'];
$Telepon = $_POST['Telepon'];
$input = mysqli_query($koneksi,"INSERT INTO datapengguna VALUES('$idpengguna','$Nama','$Alamat','$jk','$Email','$Kota','$Telepon')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:datapengguna.php");
}else{
    echo "Gagal Disimpan";
}
?>