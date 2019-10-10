<!--switch pernyataan digunakan untuk melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda-->
<?php
//ekspresi tunggal n (paling sering variabel)
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>