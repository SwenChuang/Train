<?php
    $a =10;$b=3;

    // $c = $b;
    // $b =$a;
    // $a = $c;

    // $a = $a + $b; // 13, 3
    // $b = $a - $b; // 13, 10
    // $a = $a - $b; // 3,10

    $a = $a ^ $b;
    $b = $a ^ $b;
    $a = $a ^ $b;

    // [$a , $b] = [$b , $a];

    echo "a={$a};b={$b}" ;

?>