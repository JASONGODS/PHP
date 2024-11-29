<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h3>Tambah Pelanggan</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
                
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
                
            </tr>
            
          
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan
        </button>
    </form>
</body>
</html>