
<?php
$a = array(1 => 0,0,0,0,0,0);

for($i=0 ; $i <100;$i++){
    $a[rand(1,6)] ++;
}

foreach($a as $point => $times){
    echo "{$point}點出現 {$times} 次 <br />";
}


?>
