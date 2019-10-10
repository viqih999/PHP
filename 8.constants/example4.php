<!--menggunakan sebuah konstanta dalam fungsi, bahkan jika itu didefinisikan di luar fungsi-->
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?>