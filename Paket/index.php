<?php

//menghubungkan file config dengan index
include ("../config.php");
session_start( );   
   //mulai sesi
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
    <style>
        table, th, td {
            border : 1px solid black;
            border-collapse : collapse;
            padding : 10px;
        }
            .kokoh {
        color : grey;
        font-size : 20px;
    }
    h2 {
        margin-left : 330px;
        font-weight : bold;
        font-size : 30px;
    }
        
    </style>
   
</head>
<body>
    <ul>
<li><a href="../Paket/index.php">Data Paket</a></li>
<li><a href="../Pelanggan/index.php">Data Pelanggan</a></li>
</ul>
    <h2>Tabel Paket</h2>
<!-- Tampilkan Notifikasi Jika ada -->
 <?php if (isset($_SESSION['notifikasi'])): ?>
  
 <P> <?PHP echo $_SESSION['notifikasi']; ?> </P>
 
 <!-- Hapus notifikasi setelah ditampilkan -->
 <?php  unset($_SESSION['notifikasi']); ?>
  
  <?php endif;  ?>
 
 
 <table>
    <thead>
       
        <tr align ="center">
            <th><div class="kokoh">#</div></th>
            <th><div class="kokoh">Berat</div></th>
            <TH><div class="kokoh">Tujuan</div></TH>
            <th><div class="kokoh">Biaya</div></th>
            <th><a href="tambah_paket.php">Tambah Data</a></th>
        </tr>
        
    </thead>
    <tbody>
        <?php
        $no = 1;
        //membuat penomoran data dari 1
        //membuat variable untuk menjalankan query SQL

        $query = $db->query ("SELECT * FROM paket");
        /* perulangan while akan terus berjalan (menampilkan data)*/
        
        
        while ($ulang = $query-> fetch_assoc()){
            /* fungsi fetch_assoc digunakan untuk mengambil data perulangan dalam bentuk array */
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ulang['berat'] ?></td>
                <td><?php echo $ulang['tujuan'] ?></td>
                <td><?php echo $ulang['biaya'] ?></td>
               
                
            <td align="center">
                <!-- URL ke halaman edit data dengan menggunakan parameter id pada kolom table -->

                <a href="edit_paket.php?paket_id=<?php  echo $ulang['paket_id']  ?>">Edit </a>
               

                <a onlick="return confirm ('Anda yakin ingin menghapus data?')"
                href="hapus_paket.php?paket_id=<?php echo $ulang['paket_id'] ?>">Hapus</a>
                </td>
                </tr>
                <?php
                /* Mengakhiri proses perulangan while yang dimulai pada baris 48 */
        }
        ?>
    </tbody>
 </table>
 <!-- Menghitung jumlah baris yang ada pada table (calon_siswa) -->
  <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    
</body>
</html>