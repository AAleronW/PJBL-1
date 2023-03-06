<?php 
require "function.php";

$kode = $_GET['kode'];

$result = mysqli_query($conn,"SELECT * FROM barang WHERE kode_barang = $kode");





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styled.css">
</head>
<body><div class="circle"></div>
    <div class="sidebar">
        <ul>
            <li><h2>Admin</h2></li>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="formp.php">Input Data</a></li>
            <li><a href="expe.php">Tampil Data</a></li>
        </ul>
    </div>
    <img src="img/logo.png" class="icon" width="200px">
    <div class="tabel">
        <?php $row = mysqli_fetch_assoc($result)?>
    <table border="1" cellpadding ="10" cellspacing ="0">
        <tr>
            <th>Kode Barang</th>
            <td><a href="ubah.php?kode=<?php echo $row["kode_barang"];  ?>">Ubah</a>|
         <a href="hapus.php?kode=<?php echo $row["kode_barang"];  ?>" onclick="
         return confirm ('Apakah anda yakin akan menghapus data ini?'); ">Hapus</a></td>
        </tr>
        <tr>
            <th>Kode Barang</th>
            <td><?php echo $row["kode_barang"];  ?></td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td><?php echo $row["nama_barang"];  ?></td>
        </tr>
        <tr>
            <th>No Registrasi</th>
            <td><?php echo $row["no_reg"];  ?></td>
        </tr>
        <tr>
            <th>Tipe Merek</th>
            <td><?php echo $row["merk_type"];  ?></td>
        </tr>
        <tr>
            <th>Ukuran</th>
            <td><?php echo $row["ukuran"];  ?></td>
        </tr>
        <tr>
            <th>Bahan</th>
            <td><?php echo $row["bahan"];  ?></td>
        </tr>
        <tr>
            <th>Tahun Pembelian</th>
            <td><?php echo $row["tahun_pembelian"];  ?></td>
        </tr>
        <tr>
            <th>Asal-Usul</th>
            <td><?php echo $row["asal_usul"];  ?></td>
        </tr>
        <tr>
            <th>Harga</th>
            <td><?php echo $row["harga"];  ?></td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td><?php echo $row["keterangan"];  ?></td>
        </tr>
        <tr>
            <th>Lokasi Barang</th>
            <td><?php echo $row["lokasi_barang"];  ?></td>
        </tr>
        <tr>
            <th>Jumlah Barang</th>
            <td><?php echo $row["jumlah_barang"];  ?></td>
        </tr>

   
        </table>
    </div>
    <a href="expe.php">Kembali</a>
</body>
</html>