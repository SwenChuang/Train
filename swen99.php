<h1>九九乘法表</h1>
<hr />

<table border="1" width="100%">


    <?php

    define('ROWS', 2);
    define('START', 2);
    define('COLS', 4);


    for ($k = 0; $k < ROWS; $k++) {
        echo "<tr>";
        for ($j = START; $j < START + COLS; $j++) {
            $newj = $j + $k * COLS;
            echo "<td>";
            for ($i = 1; $i <= 9; $i++) {
                $r = $newj  * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            echo "</td>";
        }
        echo "</tr>";
    }


    ?>

</table>