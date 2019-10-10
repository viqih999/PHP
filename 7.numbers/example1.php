<!--Periksa apakah jenis variabel adalah integer-->
<!--benar jika variabel integer adalah is_int ()-->
<?php
$x = 5985;
var_dump(is_int($x));
echo"<br>";
$x = 59.85;
var_dump(is_int($x));
?>