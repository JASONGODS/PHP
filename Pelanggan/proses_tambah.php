<?php

session_start( );
include ("../config.php");


if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'] ;
    $alamat = $_POST ['alamat'];
   
   
    $sql = "INSERT INTO pelanggan  (nama, alamat)
    VALUES ('$nama', '$alamat')";


   $query = mysqli_query($db, $sql) ;

   if ($query) {
    $_SESSION['notifikasi'] = "Data pelanggan berhasil ditambahkan !";
   }else {
    $_SESSION['notifikasi'] = "Data pelanggan gagal ditambahkan";

   }
header('Location: index.php');

   } else {
    die("Akses ditolak...") ;
   }




?>