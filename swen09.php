<?php 
    $score = rand(0,100);
    echo $score . '<br />';
    if($score >= 90){
        echo "A";
    }elseif( $score >= 80 &&  $score < 90){
        echo "B";
    }elseif( $score >= 70 &&  $score < 80){
        echo "C";
    }elseif( $score >= 60 &&  $score < 70){
        echo "D";
    }elseif( $score < 60 ){
        echo "E";
    }
?>