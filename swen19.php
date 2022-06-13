
<?php
$a = array(1 => 0,0,0,0,0,0);

for($i=0 ; $i <10000;$i++){
    $temp =rand(1,9);
    $point = $temp >= 7 ? $temp -3 : $temp;
    $a[$point] ++;
}

foreach($a as $point => $times){
    echo "{$point}點出現 {$times} 次 <br />";
}


?>
