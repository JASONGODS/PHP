<?php 
include ("../config.php") ;

$pelanggan_id = $_GET[ 'pelanggan_id' ]   ;

$query = $db-> query ("SELECT * FROM pelanggan WHERE pelanggan_id ='$pelanggan_id' ") ;
$ulang = $query-> fetch_assoc( );


?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    </head>
    <body>
    <h3>Edit Data Pelanggan</h3>

    <form action ="proses_edit.php" method ="POST">
        <input type ="hidden" name = "pelanggan_id" value = "<?php echo $ulang[ 'pelanggan_id' ] ; ?>">
        <table border="0">
            <tr>
                <td>Nama Pelanggan</td>
                <td>
                    <input type="text" name="nama" 
                    value="<?php echo $ulang ['nama'] ; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                <textarea name="alamat"><?php echo $ulang['alamat']; ?></textarea>
                </td>
            </tr>
           

              
</table>
<button type="submit" name="simpan">Simpan</button>


   
    </form>
</body>
</html>