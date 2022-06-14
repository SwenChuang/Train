<?php

    function sayYa(){
        echo 'Ya <br/>';
    }

    function sayHello($name){
        echo "Hello, {$name} <br/>";
    }

    
    function sayHelloV2($n, $name){
        for($i=0;$i<$n;$i++){
            echo "Hello, {$name} <br/>";
        }
    }

    function sayHelloV3($name, $n = 1){
        for($i=0;$i<$n;$i++){
            echo "Hello, {$name} <br/>";
        }
    }

    function sayHelloV4($name = 'World', $n = 1){
        for($i=0;$i<$n;$i++){
            echo "Hello, {$name} <br/>";
        }
    }

    function test1(){
        //func_get_arg() ==> 幾個參數
        $args = func_get_args();
        foreach($args as $v){
            echo "{$v} <br />";
        }
    }

    function sum(){
        $sum = 0;
        $args = func_get_args();
        foreach($args as $v){
            $sum += $v;
        }

        return $sum;
    }

    sayYa();
    sayYa();
    sayHello('Brad');
    sayHello('Swen');

    sayHelloV2(3,'Tony');

    sayHelloV3('Eric',2);
    sayHelloV3('Peter');

    sayHelloV4();

    test1(1,2,3,4, 'Swen', true);

    $r = sum(1,2,3,4,5,6,7,8,9,10);
    echo $r;
?>
