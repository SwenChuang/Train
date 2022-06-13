<?php
$poker = range(0, 51);
shuffle($poker);

// foreach($poker as $i => $card){
//     switch((int)($i/13)){
//         case 0:
//             switch($i%13){
//                 case 0: $poker[$i]= "&spades; A"; break; 
//                 case 1: $poker[$i]= "&spades; 2"; break;
//                 case 2: $poker[$i]= "&spades; 3"; break;
//                 case 3: $poker[$i]= "&spades; 4"; break;
//                 case 4: $poker[$i]= "&spades; 4"; break;
//                 case 5:
//                 case 6:
//                 case 7:
//                 case 8:
//                 case 9:
//                 case 10:
//                 case 11:
//                 case 12:    
//             };

//         case 1:
//         case 2:
//         case 3:
//     }
// }

echo '<hr/>';

$players = [[], [], [], []];
// $players=array(array(),array(),array(),array())

foreach ($poker as $i => $card) {
    $players[$i % 4][(int)($i / 4)] = $card;
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">


<div class="container">
    <table class="table table-bordered">

        <?php
        $suits = ["&spades;", "<font color = 'red'> &hearts; <font/>", "<font color = 'red'> &diams;<font/>", "&clubs;"];
        $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];

        foreach($players as $player){
            sort($player);
            echo '<tr>';
            foreach ($player as $card) {
                $suit = $suits[(int)($card/13)];
                $value = $values[$card % 13];
                echo "<td>{$suit}{$value}";
            }
        }
        ?>

    </table>
</div>