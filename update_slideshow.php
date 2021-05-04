<?php
// include database connection file
include 'koneksi.php';
$id = $_POST['id'];
$Foto = $_FILES['Foto']['name'];
$ukuran_file = $_FILES['Foto']['size'];
$tipe_file = $_FILES['Foto']['type'];
$tmp_file = $_FILES['Foto']['tmp_name'];
$path = "img/slider/".$Foto;
if(move_uploaded_file($tmp_file, $path)){
    // Cek apakah gambar berhasil diupload atau tidak    
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim    
    $query ="SELECT * FROM slideshow WHERE slideshow ='$id' ";
    $sql = mysqli_query($koneksi, $query);  
    // Cek apakah file foto sebelumnya ada di folder images    
if(is_file("img/slider/".$sql['Foto'])) // Jika foto ada      
    unlink("img/slider/".$sql['Foto']); // Hapus file foto sebelumnya yang ada di folder images
    $query ="UPDATE slideshow SET id='$id', Foto='$Foto' WHERE id ='$id'";
    $sql = mysqli_query($koneksi, $query);
if($sql){
        header("Location:slideshow.php");
    }else {
        echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href = '#ModalEdit'>Kembali ke Form</a>";
    }
}
?>