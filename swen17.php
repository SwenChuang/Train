<?php
$a = $b = $c = $d =$e =$f = 0;


for($i=0 ; $i <100;$i++){
    $dice = rand(1,6);
    if($dice ==1 ){
        $a++;
    }elseif($dice ==2 ){
        $b++;
    }elseif($dice ==3 ){
        $c++;
    }elseif($dice ==4 ){
        $d++;
    }elseif($dice ==5 ){
        $e++;
    }elseif($dice ==6 ){
        $f++;
    }
}

echo "1點有{$a}次 <br />2點有{$b}次 <br />3點有{$c}次 <br />4點有{$d}次 <br />5點有{$e}次 <br />6點有{$f}次 <br />";

?>