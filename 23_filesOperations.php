<?php
  
    $fptr = fopen("myfile.txt", "r");
    echo fgets($fptr); // it reads the first line of a file

?>