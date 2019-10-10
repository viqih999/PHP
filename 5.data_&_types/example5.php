<!--mendeklarasikan kelas objek-->
<!--Sebuah kelas adalah struktur yang dapat berisi properti dan metode-->
<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>