<?php
    include('swenapis.php');

    $s1 = new Student('Swen',87,77,55);
    $s2 = new Student('Brad',88,78,68);
    $s3 = new Student('Eric',99,26,57);

    echo "{$s1->getName()} : {$s1->sumScore()} : {$s1->avgScore()} <br/>";
    echo "{$s2->getName()} : {$s2->sumScore()} : {$s2->avgScore()} <br/>";
    echo "{$s3->getName()} : {$s3->sumScore()} : {$s3->avgScore()} <br/>";
    
?>