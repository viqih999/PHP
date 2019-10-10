    
 <html>
    <!--$ _GET dapat digunakan untuk mengumpulkan data formulir setelah mengirimkan formulir HTML 
    dengan metode = "get". $ _GET juga dapat mengumpulkan data yang dikirim dalam URL. -->
    <body>

        <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
        ?>

    </body>
</html>