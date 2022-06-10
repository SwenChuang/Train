<?php
    $year = 2000;
    $month = rand(1,12);
    $days=0;
    switch($month){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $days = 31; break;
        case 4: case 6: case 9: case 11:
            $days = 30; break;
        case 2:
            if($year % 400 == 0 || ( $year %4 == 0 && $year % 100 != 0 )){
                $days = 29; break;
            }else{
                $days = 28; break;
            }
            // $days = 28; break;
        default:
            $days = -1;
    }
    echo "西元{$year}年{$month}月有{$days}天";
