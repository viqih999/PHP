<!--$ GLOBALS adalah variabel global super PHP yang digunakan untuk mengakses 
variabel global dari mana saja dalam skrip PHP (juga dari dalam fungsi atau metode).-->
<?php
$x = 75;
$y = 25;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>