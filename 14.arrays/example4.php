<!--Untuk mengulang dan mencetak semua nilai array yang diindeks, Anda bisa menggunakan for loop-->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>