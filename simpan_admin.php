<?php 
include 'koneksi.php';
$idadmin = $_POST['idadmin'];
$username= $_POST['username'];
$password= $_POST['password'];
$input = mysqli_query($koneksi,"INSERT INTO admin VALUES('$idadmin','$username','$password')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:admin.php");
}else{
    echo "Gagal Disimpan";
}
?>