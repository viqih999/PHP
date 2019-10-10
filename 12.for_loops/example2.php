<!--foreachLoop bekerja hanya pada array, 
dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array-->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>