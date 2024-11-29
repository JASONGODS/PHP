<?php
session_start ( );
include("../config.php");

if(isset($_POST['simpan'])) {
    $pelanggan_id = $_POST['pelanggan_id'];
    $nama = $_POST ['nama'];
    $alamat = $_POST['alamat'] ;
    
   

    $sql = "UPDATE pelanggan SET
    nama='$nama',
    alamat ='$alamat'


    where pelanggan_id=$pelanggan_id";

    $query = mysqli_query ($db, $sql) ;
    if ($query) {
        $_SESSION['notifikasi'] =  "Data siswa berhasil diperbarui ";

    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal diperbarui ";
    }
    header('Location: index.php');
} else {
    die ('Akses ditolak . . .');
}
?>