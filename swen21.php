<?php 
    $a[]= 12;
    $a[]= 34;
    $a[7] = 'Swen';
    $a[] = 56 ;
    $a['name'] = 'Swen';
    $a['age'] = 18;
    $a['weight'] = 68;
    var_dump($a);
    echo '<hr/>';
    foreach($a as $j => $value){
        echo "{$j} : {$value} <br />";
    }



?>