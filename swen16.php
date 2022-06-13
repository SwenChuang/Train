<?php
        $array2[0] = 123; 
        $array2[4] = 12.3;
        $array2[7] = 'swen';
        $array2[7] = true;
        var_dump($array2);
        echo '<hr />';
        for($i=0 ; $i < 8 ; $i++){
            echo "{$i}:{$array2[$i]}<br />";
        }
        echo '<hr/>';
        foreach($array2 as $item => $value){
            echo "{$item} : {$value} <br />";
        }
        echo '<hr/>';
        foreach($array2 as $value){
            echo "{$value} <br />";
        }
