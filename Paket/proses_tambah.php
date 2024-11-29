<?php

session_start( );
include ("../config.php");


if(isset($_POST['simpan'])) {
    $BERAT = $_POST['berat'] ;
    $TUJUAN = $_POST ['tujuan'];
    $BIAYA = $_POST ['biaya'] ;
   
    $sql = "INSERT INTO paket (berat, tujuan, biaya )
    VALUES ('$BERAT', '$TUJUAN', '$BIAYA')";


   $query = mysqli_query($db, $sql) ;

   if ($query) {
    $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan !";
   }else {
    $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan";

   }
header('Location: index.php');

   } else {
    die("Akses ditolak...") ;
   }




?>