<!--if...elsepernyataan mengeksekusi beberapa kode jika kondisi benar dan kode lain jika kondisi itu adalah palsu-->
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>