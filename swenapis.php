<?php

    define('LETTERS','ABCDEFGHJKLMNPQRSTUVXYWZIO');


    function checkTWId($id){
        //1. length = 10
        //2. C1 => A-Z
        //3. C2 => 1/2
        //4. C3-10 => 0-9
        //5.檢查碼驗證


        $result = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
            $c1 = substr($id, 0, 1);
            $n12 = strpos(LETTERS, $c1) + 10;
            $n1 = (int)($n12/10);
            $n2 = $n12 % 10;
            $n3 = substr($id,1,1);
            $n4 = substr($id,2,1);
            $n5 = substr($id,3,1);
            $n6 = substr($id,4,1);
            $n7 = substr($id,5,1);
            $n8 = substr($id,6,1);
            $n9 = substr($id,7,1);
            $n10 = substr($id,8,1);
            $n11 = substr($id,9,1);

            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 
                + $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1 ;
                
            $result = $sum % 10 == 0;
        }

        return $result;

    };

    function createTWIdByRandom(){
        $gender  = rand(1,2) == 1;
        return createTWIdByGender($gender);
    }

    function createTWIdByGender($gender = false){
        $area = substr(LETTERS, rand(0,25), 1);
        return createTWIdByBoth($area, $gender);
    }

    function createTWIdByArea($area = 'B'){
        $gender = rand(1,2) == 1;
        return createTWIdByBoth($area, $gender);
    }

    function createTWIdByBoth($area, $gender){
        $tempId = $area;
        $tempId .= ($gender ? '1' : '2');
        for($i=0; $i<7 ; $i++){
            $tempId .= rand(0,9);
        }
        for($i=0;$i<=9;$i++){
            if(checkTWId($tempId . $i)){
                $tempId .= $i;
                break;
            }
        }
        return $tempId;
    }

    class Student{

        private $name, $math, $eng, $ch;

        function __construct($name, $math, $eng, $ch){
            $this->name = $name;
            $this->math = $math;
            $this->eng = $eng; 
            $this->ch = $ch;
        }

        function getName(){
            return $this->name;
        }

        function avgScore(){
            return $this->sumScore()/3;
        }

        function sumScore(){
            return $this->ch + $this-> math + $this->eng;
        }

        function setMath($math){
            return $this-> math = $math;
        }

    }




?>




<!-- define('C2','12');
define('C09','1234567890'); -->


<!-- 
if(strlen($id)==10){
            $c1 = substr($id, 0, 1);
            if(strpos(LETTERS,$c1) !== false){
                $c2 = substr($id, 1, 1);
                if(strpos(C2,$c2) !== false){
                    $c39 = substr($id,2,8);
                    if(strpos(C09,$c39)){
                        $result = true ;
                    }
                }
            }
        } -->





<!-- 
if (checkTWId('A125555555')){
        echo 'Ok';
    }else{
        echo 'XX';
    } -->