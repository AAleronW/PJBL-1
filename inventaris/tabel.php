
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
    <link rel="stylesheet" href="stylebl.css">
</head>
<body>
    <div class="circle"></div>
    <div class="sidebar">
        <ul>
            <li><h2>Admin</h2></li>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="formp.php">Input Data</a></li>
            <li><a href="expe.php">Tampil Data</a></li>
        </ul>
    </div>
    <img src="img/logo.png" class="icon" width="200px">
    <!-- Isian Web --> 
<form action="" method="POST" class="search">
<input type="search" name="keyword">
<button type="submit" name="search">Cari Barang!</button>
</form>

</div><div class="tabel">
<table border="1" cellpadding ="10" cellspacing ="0">


<tr>
        <th>No</th>
        <th>Aksi</th>
        <th colspan="3" class="data">Data Barang</th>
       
</tr>
<?php  foreach ($barang as $row) :?>
<tr>
    <td><?php echo $i ; 
            $i++;?></td>
    <td><a href="ubah.php?kode=<?php echo $row["kode_barang"];  ?>">Ubah</a>|
         <a href="hapus.php?kode=<?php echo $row["kode_barang"];  ?>" onclick="
         return confirm ('Apakah anda yakin akan menghapus data ini?'); ">Hapus</a></td>
         <td><a href="data.php?kode=<?php echo $row["kode_barang"];?>"><div class="link"><?php echo $row["nama_barang"]; ?> <?php echo $row["kode_barang"];  ?></div></a></td>
</tr>
<?php endforeach ; ?>

</table>
</div>
</body>
</html>
