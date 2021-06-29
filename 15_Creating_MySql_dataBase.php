<?php
echo "Welcome to the stage where we are ready to get connected to a database";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE dbAshis";
// mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<br> DataBase was created succesfully!";
}
else{
    echo "<br>". mysqli_error($conn). " error";
}


if (!$conn) {
    die("<br> Sorry! we are failed to connect: " . mysqli_connect_error());
} else {
    echo "<br> Connection was successful";
}
