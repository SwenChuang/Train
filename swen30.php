<?php 
    // 後端畫驗證碼圖


    // 1. 畫布
    // 2. 作畫
    // 3. 輸出(browser/ file)
    // 4. 清除
    header('Content-type:image/jpeg');

    $rate = $_GET['rate'];
    $width = 400;

    $gd = imagecreate(400, 20);

    $red = imagecolorallocate($gd, 255, 0, 0);

    $yellow = imagecolorallocate($gd, 255, 255, 0);

    imagefilledrectangle($gd,0,0,$width,20,$red);

    imagefilledrectangle($gd,0,0,$width*($rate/100),20,$yellow);

    imagejpeg($gd);

    imagedestroy($gd);

?>