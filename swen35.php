<?php
    $fp = fopen('dir2/swen1.txt','a');
    fwrite($fp,'Hello, World');

    fclose($fp);
?>