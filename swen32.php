<?php

    header('Content-type:image/jpeg');

    $gd =imagecreatefromjpeg("images/test.jpg");

    $yellow = imagecolorallocate($gd, 255, 255, 0);

    imagettftext($gd,36,0,100,100,$yellow,'fonts/NotoSansTC-Regular.otf','Hello World');

    imagejpeg($gd);

    imagedestroy($gd);

    

?>