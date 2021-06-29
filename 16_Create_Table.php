<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbashis";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("<br> Sorry! we are failed to connect: " . mysqli_connect_error());
} else {
    echo "<br> Connection was successful";
}

$sql = "CREATE TABLE `trip` ( `name` VARCHAR(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , `doj` DATETIME NOT NULL )";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<br>The table was created successfully!<br>";
} else{
    echo "<br>Error-----> ".mysqli_error($conn);
}