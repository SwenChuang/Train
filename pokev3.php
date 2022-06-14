<!-- Array 已存放52張poker Data -->
<!--  -->


<?php

$poker = $temp = array();
for ($i = 0; $i < 52; $i++) {
    $temp[$i] = $i;
}

for($i = 0; $i<52 ; $i ++){
    $index = rand(0,51-$i);
    $poker[$i] = $temp[$index];
    unset($temp[$index]);
    $temp = array_values($temp);
    echo var_dump($temp);
}

foreach($poker as $i => $v){
    echo "{$i}:{$v} <br/>";
}


?>

