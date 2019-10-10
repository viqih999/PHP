<?php
/*Sebuah variabel dideklarasikan dalam fungsi memiliki LINGKUP LOKAL dan hanya dapat diakses dalam fungsi bahwa*/
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>