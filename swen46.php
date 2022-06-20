<!-- 物件導向 -->
<?php 
    class Bike{
        
        // private $speed; 只能在class裡變更. 在此之外不能變更.
        // var $speed;     //大家都可以用
        //private $speed; //只給自己用
        protected $speed; //可提供給繼承子階用
        
        function __construct(){
            $this->speed = 0;
        }

        function upSpeed(){
            $this->speed = $this->speed<1? 1: $this->speed*1.2;
        }

        function downSpeed(){
            $this->speed = $this->speed<1? 0: $this->speed*0.7;
        }

        function getSpeed(){
            return  $this->speed;
        }

    }
    class Scooter extends Bike{

        function upSpeed(){
            $this->speed = $this->speed<1? 1: $this->speed*3.1;
        }

        function downSpeed(){
            $this->speed = $this->speed<1? 0: $this->speed*0.3;
        }
    }

    class Swen{

    }

    $swen= new Swen();
    $b1 = new Bike();
    $s1 = new Scooter();
    $b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
    $s1->upSpeed();$s1->upSpeed();$s1->upSpeed();$s1->upSpeed();

    

    echo $b1->getSpeed() . '<br/>';
    echo $s1->getSpeed() . '<br/>';

    function test1(Bike $obj){

    }

    test1($s1);

    // if($b1 instanceof Bike){    //instanceof 判定用
    //     echo 'OK';
    // }else{
    //     echo 'XX';
    // }

    // $myBike = new Bike(); $urBike = new Bike();
    // $myBike->upSpeed();
    // $myBike->upSpeed();
    // $myBike->upSpeed();
    // $myBike->upSpeed();

    // $urBike->upSpeed();
    // $urBike->upSpeed();
    // $urBike->upSpeed();
    // $urBike->upSpeed();
    // $urBike->downSpeed();
    // $urBike->upSpeed();

    // echo "myBike : {$myBike->getSpeed()} <br/>";
    // echo "urBike : {$urBike->getSpeed()} <br/>";
    // echo '<br/>';

    // while($myBike->getSpeed() < 10){
    //     $myBike->upSpeed();
    // }
    // echo "myBike : {$myBike->getSpeed()} <br/>";

?>