<?php

    $fpointer = fopen('myfile.txt', 'r');
    // $fpointer = fopen('myfile1.txt', 'r');
    // echo var_dump($fpointer);
    // if (!$fpointer) {
    //     die("Unable to open your file");
    // }
    $content = fread($fpointer, filesize('myfile.txt'));
    echo $content;
    fclose($fpointer);

?>