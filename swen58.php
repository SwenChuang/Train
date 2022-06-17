<h1>Page 2</h1>
<hr/>
<?php
    include('swenapis.php');

    session_start();
    $var = $_SESSION['var'] ;
    echo "{$var->sumScore()} : {$var->avgScore()}";


    
    // foreach($var as $v){
    //     echo $v . '<br/>';
    // }
?>
<hr/>
<a href="swen59.php">Logout</a>