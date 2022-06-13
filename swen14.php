<?php

    $array = [1,2,3,4.555,"swen",true];

    var_dump($array);
    echo '<hr />';
    echo count($array) . '<br />';
    echo $array[2];
    echo '<hr />';
    for($i=0 ; $i < count($array) ; $i++){
        echo "{$i}:{$array[$i]}<br />";
    }
    echo '<hr/>';
    foreach($array as $item => $value){
        echo "{$item} : {$value} <br />";
    }
    echo '<hr/>';
    foreach($array as $value){
        echo "{$value} <br />";
    }


?>