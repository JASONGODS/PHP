<?php
session_start ( );
include("../config.php");

if(isset($_POST['simpan'])) {
    $paket_id = $_POST['paket_id'];
    $BERAT = $_POST ['berat'];
    $TUJUAN = $_POST['tujuan'] ;
    $BIAYA = $_POST ['biaya'];
   

    $sql = "UPDATE paket SET
    berat='$BERAT',
    tujuan='$TUJUAN',
    biaya='$BIAYA'
    where paket_id=$paket_id";

    $query = mysqli_query ($db, $sql) ;
    if ($query) {
        $_SESSION['notifikasi'] =  "Data paket berhasil diperbarui ";

    } else {
        $_SESSION['notifikasi'] = "Data paket gagal diperbarui ";
    }
    header('Location: index.php');
} else {
    die ('Akses ditolak . . .');
}
?>