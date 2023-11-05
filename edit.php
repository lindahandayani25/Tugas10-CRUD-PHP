<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Produk</title>
</head>
<body>
  FORM EDIT PRODUK
  <?php echo "<br>================================<br>"; ?>
  <?php
    include 'koneksi.php';

    $produk = mysqli_query($conn,"SELECT * from produk where id='$_GET[id]'");

    while($p = mysqli_fetch_array($produk)){
        $id = $p["id"];
        $kode_produk = $p["kode_produk"];
        $nama_produk = $p["nama_produk"];
        $harga = $p["harga"];
        $stok = $p["stok"];
        $satuan = $p["satuan"];
        $supplier = $p["supplier_id"];
    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="number" name="id" disabled value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td>:</td>
            <td><input type="text" name="kode_produk" value="<?php echo $kode_produk ?>"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="nama_produk" value="<?php echo $nama_produk ?>"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td>:</td>
            <td><input type="number" name="harga" value="<?php echo $harga ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="number" name="stok" value="<?php echo $stok ?>"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td>:</td>
            <td><input type="text" name="satuan" value="<?php echo $satuan ?>"></td>
        </tr>
        <tr>
            <td>Supplier</td>
            <td>:</td>
            <td><input type="text" name="supplier" value="<?php echo $supplier ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
</html>