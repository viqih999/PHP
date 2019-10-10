<!--ifpernyataan mengeksekusi beberapa kode jika salah satu kondisi benar-->
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>