<?php

session_start ( );
include ("../config.php" ) ;

if (isset($_GET['pelanggan_id'])) {
    $pelanggan_id = $_GET ['pelanggan_id'] ;

    $sql = "DELETE FROM pelanggan WHERE pelanggan_id =$pelanggan_id";
    $query = mysqli_query ($db, $sql) ;

    if ($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil dihapus !" ;
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal dihapus !" ;
    }
    header ('Location: index.php') ;
} else {
    die("akses di tolak . . .");
}

?>