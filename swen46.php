<!-- 物件導向 -->
<?php 
    class Bike{
        
        // private $speed; 只能在class裡變更. 在此之外不能變更.
        // var $speed;
        private $speed;
        
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

    $myBike = new Bike(); $urBike = new Bike();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();

    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->downSpeed();
    $urBike->upSpeed();

    echo "myBike : {$myBike->getSpeed()} <br/>";
    echo "urBike : {$urBike->getSpeed()} <br/>";
    echo '<br/>';

    while($myBike->getSpeed() < 10){
        $myBike->upSpeed();
    }
    echo "myBike : {$myBike->getSpeed()} <br/>";

?>