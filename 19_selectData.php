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

$sql  = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

echo "<br>";
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
if ($num>0) {
    // $row  = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row  = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row  = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // we can fetch in a better way using the while loops

    while ($row = mysqli_fetch_assoc($result)){ // it exits when the mysqli_fetch_assos's value is NULL
       echo var_dump($row);
       echo "<br>";
    }


}

?>


