<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Produk</title>
</head>
<body>
<?php
include 'koneksi.php';
?>
FORM TAMBAH PRODUK 
<?php echo "<br>================================<br>"; ?>
<form action="proses_tambah.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>Kode Produk</td>
        <td>:</td>
        <td><input type="text" name="kode_produk"></td>
    </tr>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td><input type="text" name="nama_produk"></td>
    </tr>
    <tr>
        <td>Harga Produk</td>
        <td>:</td>
        <td><input type="number" name="harga"></td>
    </tr>
    <tr>
        <td>Stok</td>
        <td>:</td>
        <td><input type="number" name="stok"></td>
    </tr>
    <tr>
        <td>Satuan</td>
        <td>:</td>
        <td><input type="text" name="satuan"></td>
    </tr>
    <tr>
        <td>Nama Supplier</td>
        <td>:</td>
        <td>
            <select name="supplier" id="supplier">
                    <?php
                    // Fetch data from the "items" table
                    $query = mysqli_query($conn, "SELECT * FROM supplier");
                    if(mysqli_num_rows($query)>0){
                        while($data = mysqli_fetch_array($query)){
                            echo "<option value='" . $data["id_supplier"] . "'>" . $data["nama"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No items available</option>";
                    }
                    ?>
            </select>
        </td>
    </tr>
    
   
</table>
<input type="submit" name="Submit" value="Simpan">
</form>
</body>
</html>