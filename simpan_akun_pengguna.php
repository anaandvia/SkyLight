<?php 
include 'koneksi.php';
$iduser= $_POST['iduser'];
$idpengguna= $_POST['idpengguna'];
$username= $_POST['username'];
$password= $_POST['password'];
$input = mysqli_query($koneksi,"INSERT INTO akunpengguna VALUES('$iduser','$idpengguna','$username','$password')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:akun_pengguna.php");
}else{
    echo "Gagal Disimpan";
}
?>