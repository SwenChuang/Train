<?php

    //讀檔案

    $fp = opendir('C:\\') or die('Server Busy');

    while($file = readdir($fp)){
        echo $file . '<br/>';
    }

    closedir($fp);

?>