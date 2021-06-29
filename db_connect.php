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
?>