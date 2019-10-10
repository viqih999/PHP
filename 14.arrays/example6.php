<!--Untuk mengulang dan mencetak semua nilai array asosiatif, Anda bisa menggunakan foreach loop-->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>