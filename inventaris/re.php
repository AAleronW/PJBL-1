<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}


require "function.php";


$barang = query("SELECT * FROM barang ORDER BY id DESC");

if(isset($_POST['search'])){
$barang  = cari($_POST['keyword']);
    if($barang == false){
        $eror = false;
    }

}
// 

$i = 1; 

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleb.css">
</head>
<body>
    <div class="circle"></div>
<div class="sidebar">
<ul>
    <img src="img/logo.png"  class="gmbr" width="150px" >
    <a href="dasb.php"><li>Beranda</li></a>
    <a href="formp.php" ><li>Input Data</li></a>
    <a href="index.php" ><li>Tampil Data</li></a>
</ul>
</div>
<form action="" method="POST" class="search">
<input type="search" name="keyword">
<button type="submit" name="search">Cari Barang!</button>
</form>

</div><div class="tabel">
<table border="1" cellpadding ="10" cellspacing ="0">


<tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>No Registrasi</th>
        <th>Tipe Merek</th>
        <th>Ukuran</th>
        <th>Bahan</th>
        <th>Tahun Pembelian</th>
        <th>Asal Usul</th>
        <th>Harga</th>
        <th>Keterangan</th>
        <th>Lokasi Barang</th>
        <th>Jumlah Barang</th>
</tr>


<?php  foreach ($barang as $row) :?>
<tr>
    <td><?php echo $i ; 
            $i++;?></td>
    <td><a href="ubah.php?kode=<?php echo $row["kode_barang"];  ?>">Ubah</a>|
         <a href="hapus.php?kode=<?php echo $row["kode_barang"];  ?>" onclick="
         return confirm ('Apakah anda yakin akan menghapus data ini?'); ">Hapus</a></td>
         <td><?php echo $row["kode_barang"];  ?></td>
         <td><?php echo $row["nama_barang"];  ?></td>
         <td><?php echo $row["no_reg"];  ?></td>
         <td><?php echo $row["merk_type"];  ?></td>
         <td><?php echo $row["ukuran"];  ?></td>
         <td><?php echo $row["bahan"];  ?></td>
         <td><?php echo $row["tahun_pembelian"];  ?></td>
         <td><?php echo $row["asal_usul"];  ?></td>
         <td><?php echo $row["harga"];  ?></td>
         <td><?php echo $row["keterangan"];  ?></td>
         <td><?php echo $row["lokasi_barang"];  ?></td>
         <td><?php echo $row["jumlah_barang"];  ?></td>
</tr>
<?php  endforeach ;?>
<!-- scavenger hunt -->
<!--  picoCTF{th4ts_4_l0 t_0f_pl4c3s_2_lO0k_a69684fd} -->
</table>
</div>
</body>
</html>
