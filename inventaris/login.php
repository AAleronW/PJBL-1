<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location:index.php");
    exit;
}

$conn = mysqli_connect("localhost","root","","inventaris");



if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];

   $result = mysqli_query($conn,"SELECT * FROM  admin WHERE username = '$username' ");

        if (mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);

                if(  $password === $row['password']){
                   
                   $_SESSION['login'] = true;
                    header('Location:index.php');
                    exit;
                }
        }
            $error = true;
     }

?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snapinv</title>
    <link rel="stylesheet" href="stylel.css">
</head>
<body>
    <div class="image">
    <img  src="img/logo.png" alt="" width="600px">
    </div>
    <?php if(isset($error)):   ?>
    <div class="warn"><p>Email / Password salah</p></div>
    <?php  endif;  ?>
    <div class="container">
        <form action="" method="post">
            <Div class="text_field"><label for="Email" >Username</label>
            <input type="text" id="email" name="username" required></Div>
            <div class="text_field"><label for="password">Password</label>
            <input type="password" id="pass" name="password" required></div>
            <div class="submit">   <button type="submit" name="submit">Submit</div>
        </form>
    </div>
</body>
</html>