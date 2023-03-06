<?php


$conn = mysqli_connect("localhost","root","");

$a = 80;
 $b = 100;
$c = $a + $b ;
echo $c;

$orangphp = "tajir";
if($orangphp == "tajir"){
    echo "  dapet Lambo";
}else{
    echo "Jir Kere";
}

for($x = 1 ; $x <= 10 ; $x++){
    echo "*"  . PHP_EOL;
}


?>