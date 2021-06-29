<?php
    // what is session
    // information across different pages
 
    // varify the user login info
    session_start();
    $_SESSION['username']  = "Ashis";
    $_SESSION['password']  = "%##$#akdfjdkl";
    echo "We have saved your data";
    

?>

