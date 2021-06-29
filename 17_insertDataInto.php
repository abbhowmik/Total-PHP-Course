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

$sql = "INSERT INTO `trip` (`name`, `gender`, `doj`) VALUES ('Ashis', 'male','12:23')";
$result = mysqli_query($conn, $sql); // executed

if ($result) {
    echo "<br>Data is inserted successfully!";
} else{
    echo "<br>Error-----> ".mysqli_error($conn);
}