<?php 
include ("../config.php") ;

$paket_id = $_GET[ 'paket_id' ]   ;

$query = $db-> query ("SELECT * FROM paket WHERE paket_id ='$paket_id' ") ;
$ulang = $query-> fetch_assoc( );


?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Paket</title>
    </head>
    <body>
    <h3>Edit Data Paket</h3>

    <form action ="proses_edit.php" method ="POST">
        <input type ="hidden" name = "paket_id" value = "<?php echo $ulang[ 'paket_id' ] ; ?>">
        <table border="0">
            <tr>
                <td>Berat</td>
                <td>
                    <input type="text" name="berat" 
                    value="<?php echo $ulang ['berat'] ; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td>
                    <input type="text" name="tujuan" 
                    value="<?php echo $ulang ['tujuan'] ; ?>"required>
                </td>
            </tr>
           

               <tr>
                <td>Biaya</td>
                <td>
                    <input type="text" name="biaya"
                value= "<?php echo $ulang ['biaya']; ?>">
            </td>
               </tr>
              
</table>
<button type="submit" name="simpan">Simpan</button>


   
    </form>
</body>
</html>