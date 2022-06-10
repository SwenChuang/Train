<?php

    $year = 2000;

    if($year % 4 ==0){
        if($year % 100 ==0){
            //28
            if($year % 400 ==0){
                //28
            }else{
                //29
            }
        }else{
            //29
        }
    }else{
        //28
    }


    if($year % 400 == 0 || ( $year %4 == 0 && $year % 100 != 0 )){
        echo "閏年";
    }else{
        echo "平年";
    }

?>