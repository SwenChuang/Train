<?php
    $fp = fopen('dir2/swen1.txt', 'r');
    $size = filesize('dir2/swen1.txt');

    echo  fread($fp, $size);
    

    fclose($fp);
?>
