<?php
        // include 'db_connect1.php';
        require 'db_connect.php'; // require means that file should be present in our directory. either it would be throws an error

        $sql  = "SELECT * FROM `trip`";
        $result = mysqli_query($conn, $sql);

        echo "<br>";
        $num = mysqli_num_rows($result);
        echo $num;
        echo "<br>";
?>