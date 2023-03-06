<?php

$conn = mysqli_connect("localhost","root","","inventaris");


$query = "SELECT * FROM barang";

$res = mysqli_query($conn,$query);


?>




</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <!-- <div class="menu-toogle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        
        
        
        </div> -->
        <div class="logo">
            <h2>Snapan Inventory</h2>
        </div>
        <!-- <ul>
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Report</a></li>
          <li><a href="">Contact</a></li>
        </ul>

         -->

    </nav>

    <?php while($row = mysqli_fetch_assoc($res)):?>
<ul class="box">
 <a href= "data.php?kode=<?php echo $row['kode_barang'];?>"><li><?php echo $row["nama_barang"]; ?>,<?php echo $row['kode_barang'];?>
</li></a>

</ul>
<?php endwhile; ?>



<script src="script.js"></script>
</body>
</html>