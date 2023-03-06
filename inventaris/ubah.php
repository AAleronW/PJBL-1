<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}

require "function.php";
$kode =$_GET["kode"];


$result = mysqli_query( $conn,"SELECT * FROM barang WHERE kode_barang =  $kode");






if(isset($_POST["simpan"])){

    if(ubah($_POST) > 0){
        echo   "<script>
        alert(' Data Berhasil diubah');
        document.location.href='index.php';           
         </script>";
    } else{
        echo "<script>
        alert(' Data gagal diubah');
        document.location.href='index.php';           
         </script>";
    }  
        
    
    
    }
    



?>





<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylef.css">
    <title>input data</title>

   
</head>
<body>
    <div class="circle"></div>
    <div class="sidebar">
        <ul>
            <li><h2>Admin</h2></li>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="formp.php">Input Data</a></li>
            <li><a href="tabel.php">Tampil Data</a></li>
        </ul>
    </div>
    <img src="img/logo.png" class="icon" width="200px">
    <!-- Isian Web -->


<div class="form">
<?php  $row = mysqli_fetch_assoc($result);?>

<form method="post">
<Table border="1" cellpadding="10" cellspacing="0">
    <tr>
 <td class = "box"><label for="kode">KODE BARANG</label></td>
<td class = "input"><input type="number" name="kode_barang" id="kode" autocomplete="off" required value="<?php echo $row["kode_barang"]; ?>"></td>
    </tr></div>

    <tr>
<td class = "box"><label for="nama">NAMA BARANG</label></td>
<td class = "input"><input type="text" name="nama_barang" id="nama" autocomplete="off" required value="<?php echo $row["nama_barang"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="no">NO REG</label></td>
    <td class = "input"><input type="number" name="no_registrasi" id="no" autocomplete="off" required value="<?php echo $row["no_reg"]; ?>"></td>
</tr></div>
<tr>
   <td class = "box"><label for="merek">TIPE MEREK</label></td>
    <td class = "input"><input type="text" name="merk_type" id="merek" autocomplete="off" required value="<?php echo $row["merk_type"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="ukuran">UKURAN</label></td>
    <td class = "input"><input type="text" name="ukuran" id="ukuran" autocomplete="off" required value="<?php echo $row["ukuran"]; ?>"></td>
</tr></div>

<tr>
<td class = "box"><label for="bahan">BAHAN</label></td>
    <td class = "input"><input type="text" name="bahan" id="bahan" autocomplete="off" required value="<?php echo $row["bahan"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="tahun">TAHUN PEMBELIAN</label></td>
<td class = "input"><input type="number" name="tahun_pembelian" id="tahun" autocomplete="off" required value="<?php echo $row["tahun_pembelian"]; ?>"></td>
</tr></div>
<tr>
       <td class = "box"><label for="asal">ASAL - USUL</label></td>
        <td class = "input"><input type="text" name="asal_usul" id="asal" autocomplete="off" required value="<?php echo $row["asal_usul"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="harga">HARGA</label></td>
<td class = "input"><input type="text" name="harga" id="harga" autocomplete="off" required value="<?php echo $row["harga"]; ?>"></td>
</tr></div>

<tr>
<td class = "box"><label for="ket">KETERANGAN</label></td>
<td class = "input"><input type="text" name="keterangan" id="ket" required value="<?php echo $row["keterangan"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="loc">LOKASI BARANG</label></td>
<td class = "input"><input type="text" name="lokasi_barang" id="loc" required value="<?php echo $row["lokasi_barang"]; ?>"></td>
</tr></div>
<tr>
<td class = "box"><label for="jmlh">JUMLAH BARANG</label></td>
<td class = "input"><input type="number" name="jumlah_barang" id="loc" required value="<?php echo $row["jumlah_barang"]; ?>"></td>
</tr>
<tr>
    <td colspan="2"><button type="submit" name="simpan">UBAH</button></td>
</tr>
</Table>
</form>

</div>
</body>
</html>