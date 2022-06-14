<?php
    function changeA(){
        global $a;  // 區域變全域
        $a = 100 ;
        echo "debug: {$a} <br/>";
    }

    $a = 10;
    echo $a;
    echo '<hr/>';
    changeA();
    echo $a;

    echo '<hr/>';

    function changeB(&$c){
        $c = 111;
    }

    $b = 1111;
    echo $b;
    echo '<hr/>';
    changeB($b);
    echo $b;

?>