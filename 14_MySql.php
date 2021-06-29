<?php
echo "Welcome to the stage where we are ready to get connected to a database";

/*
Ways to connect to a MySql Database
1. MySQLi extension
2. PDO
*/


// connecting to the Database

$servername = "localhost";
$username = "root";
$password = "";

// creat connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful

if (!$conn) {
    die("<br> Sorry! we are failed to connect: " . mysqli_connect_error());
} else {
    echo "<br> Connection was successful";
}
