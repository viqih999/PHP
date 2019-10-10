<!--if...elseif...elsepernyataan mengeksekusi kode yang berbeda selama lebih dari dua kondisi-->
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>