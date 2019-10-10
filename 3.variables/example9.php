<!--menggunakan static ketika kita tidk ingin menghapus variabel local tidak akan di hapus-->
<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>