<?php
    // start the session and get the data
    session_start();

    if (isset($_SESSION['username'])){ // or $_SESSION['password]
        echo "Welcome ".  $_SESSION['username'];
        echo "<br>";
        echo "Your password is ". $_SESSION['password'];
        echo "<br>"; 
    }
    else{
        echo "Please login to continue!";
    }

?>