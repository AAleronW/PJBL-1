<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}
require "function.php";

$kd =$_GET["kode"];

if(hapus($kd) > 0){
echo "<script>
alert(' Data Berhasil dihapus');
document.location.href='index.php';           
 </script>";
}else{
    "<script>
    alert(' Data Gagal dihapus');
    document.location.href='index.php';           
     </script>";
}


?>