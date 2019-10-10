<html>
    <!--$ _POST banyak digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML
     dengan metode = "posting". $ _POST juga banyak digunakan untuk mengirimkan variabel, 
     Ketika pengguna mengirimkan data dengan mengklik "Kirim", data formulir dikirim ke file 
     yang ditentukan dalam atribut tindakan dari tag <form>.-->
    <body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

</body>
</html>