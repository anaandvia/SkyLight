<?php 
include 'koneksi.php';
$idhotel = $_POST['idhotel'];
$Nama = $_POST['Nama'];
$Alamat= $_POST['Alamat'];
$Kontak = $_POST['Kontak'];
$input = mysqli_query($koneksi,"INSERT INTO datahotel VALUES('$idhotel','$Nama','$Alamat','$Kontak')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:datahotel.php");
}else{
    echo "Gagal Disimpan";
}
?>