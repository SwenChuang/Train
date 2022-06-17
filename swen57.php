<?php 
    // SESSION
    
    include('swenapis.php');
    session_start();
    
    // $var  = rand(1, 49);
    // echo $var;

    // $var = [1,2,3,4,5];
    
    $var = new Student('Swen',90,80,40);
    echo "{$var->sumScore()} : {$var->avgScore()}";
    $_SESSION['var'] = $var;

    // $var = 1000; //不會進session
    // $var[2] = 100; //不會進Session
    $var->setMath(100);

?>  
<hr/>
<a href="swen58.php">Next Page</a>