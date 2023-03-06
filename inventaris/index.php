<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylei.css">
    <title>Document</title>
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
   <div class="box"> 
    <div class="box1" ><a href="formp.php">Tambah Data</a></div>
    <div class="box2"><a href="tabel.php">Tampil Data</a></div>
    <div class="box3" ><a href="">Coming soon</a></div>
    <div class="box4" ><a href="">Coming soon</a></div>

   </div>
</body>
</html>