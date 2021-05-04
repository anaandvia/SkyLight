<?php
// include database connection file
include 'koneksi.php';
$idkamar= $_POST['idkamar'];
$idhotel= $_POST['idhotel'];
$jeniskamar= $_POST['jeniskamar'];
$harga= $_POST['harga'];
$Foto = $_FILES['Foto']['name'];
$ukuran_file = $_FILES['Foto']['size'];
$tipe_file = $_FILES['Foto']['type'];
$tmp_file = $_FILES['Foto']['tmp_name'];
$path = "img/kamar/".$Foto;
if(move_uploaded_file($tmp_file, $path)){
    // Cek apakah gambar berhasil diupload atau tidak    
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim    
    $query ="SELECT * FROM kamar WHERE kamar ='$idkamar' ";
    $sql = mysqli_query($koneksi, $query);  
    // Cek apakah file foto sebelumnya ada di folder images    
if(is_file("img/kamar/".$sql['Foto'])) // Jika foto ada      
    unlink("img/kamar/".$sql['Foto']); // Hapus file foto sebelumnya yang ada di folder images
    $query ="UPDATE kamar SET idkamar='$idkamar',idhotel='$idhotel',jeniskamar='$jeniskamar', harga='$harga' ,Foto='$Foto' WHERE idkamar ='$idkamar'";
    $sql = mysqli_query($koneksi, $query);
if($sql){
        header("Location:kamar.php");
    }else {
        echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href = '#ModalEdit'>Kembali ke Form</a>";
    }
}
?>
