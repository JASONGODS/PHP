<?php

session_start ( );
include ("../config.php" ) ;

if (isset($_GET['paket_id'])) {
    $paket_id = $_GET ['paket_id'] ;

    $sql = "DELETE FROM paket WHERE paket_id =$paket_id";
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